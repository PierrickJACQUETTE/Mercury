<?php

namespace PW6\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PW6\UserBundle\Entity\User;
use PW6\UserBundle\Form\UserType;
use PW6\UserBundle\Form\UserEditType;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends Controller{

    public function viewAction($id){
        $user = $this->getDoctrine()->getManager()->getRepository("PW6UserBundle:User")->find($id);
        $perso = $user->getPerso();
        if($user == null){ throw $this->createNotFoundException("L'utilisateur ".$id." n'existe pas."); }
        if($this->getUser() == null){ throw $this->createAccessDeniedException("Veuillez-vous connecter."); }
        //if($user->getUsername() != $this->getUser()->getUsername()){ throw $this->createAccessDeniedException("Un profil est personnel."); }

        $superieur = $this->getDoctrine()->getManager()->getRepository("PW6UserBundle:Personnel")->find($perso->getSuperieur());
        return $this->render("UserBundle:User:view.html.twig",
            array("page_name"=>"Utilisateur", "user"=>$user, "salarie"=>$salarie, "superieur"=>$superieur));
    }

    public function editAction(Request $request, $id){
        $user = $this->getDoctrine()
                        ->getManager()
                        ->getRepository("UserBundle:User")
                        ->find($id);

        if($user == null){
            throw $this->createNotFoundException("L'utilisateur ".$id." n'existe pas.");
        }

        if($this->getUser() == null){
            throw $this->createAccessDeniedException("Veuillez-vous connecter.");
        }

        if($user->getUsername() != $this->getUser()->getUsername()){
            throw $this->createAccessDeniedException("Vous n'êtes pas autorisés à voir les profils des autres.");
        }

        $form = $this->createForm(UserType::class, $user)
                        ->remove('save')
                        ->remove('salarie')
                        ->add('save', SubmitType::class, array('label'=>'Modifier'));

        if($form->handleRequest($request)->isValid()){
            $password = $this->get('security.password_encoder')->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl("utilisateur_view", array('id'=>$user->getId())));
        }

        return $this->render('UserBundle:User:edit.html.twig',array('form'=>$form->createView()));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function deleteAction(Request $request, $id){
        $user = $this->getDoctrine()
                        ->getManager()
                        ->getRepository("UserBundle:User")
                        ->find($id);

        if($user == null){
            throw $this->createNotFoundException("L'utilisateur ".$id." n'existe pas.");
        }

        if($this->getUser() == null){
            throw $this->createAccessDeniedException("Veuillez-vous connecter.");
        }

        if($user->getUsername() != $this->getUser()->getUsername()){
            throw $this->createAccessDeniedException("Vous n'êtes pas autorisés à voir les profils des autres.");
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        $this->get('security.token_storage')->setToken(null);
        $request->getSession()->invalidate();

        return $this->redirect($this->generateUrl("homepage"));
    }
}
