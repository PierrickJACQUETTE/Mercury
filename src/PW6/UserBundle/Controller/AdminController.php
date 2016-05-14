<?php

namespace PW6\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PW6\UserBundle\Entity\User;
use PW6\UserBundle\Entity\Personnel;
use PW6\UserBundle\Form\PersonnelType;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;

class AdminController extends Controller{

    public function addAction(Request $req){
        $perso = new Personnel();
        $form = $this->createForm(PersonnelType::class, $perso);
        if($form->handleRequest($req)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($perso);
            $em->flush();
            $req->getSession()->getFlashBag()->add("notice", "Nouvelle fiche personnel crée.");
            return $this->redirect($this->generateUrl("pw6_user_view", array('id'=>$perso->getId())));
        }
        return $this->render('PW6UserBundle:Admin:add.html.twig',array('form'=>$form->createView()));
    }

    public function addAmin($id){
        $user = $this->getDoctrine()->getManager()->getRepository("PW6UserBundle:User")->find($id);
        if($user == null){
            throw new Exception("Impossible d'ajouter cet utilisateur à la liste des admin (id:".$id.")", 1);
        }
        $roles = $user->getRoles();
        if(!in_array('ROLE_ADMIN', $roles)){
            $roles[] = 'ROLE_ADMIN';
            $user->setRoles($roles);
        }
    }

    public function indexSalarieAction(){
        $salaries = $this->getDoctrine()->getManager()->getRepository("PW6UserBundle:Salarie")->findAll();
        return $this->render('PW6UserBundle:Admin:indexSalarie.html.twig', array("page_name"=>"index salarié", "salaries"=>$salaries));
    }

    public function indexUtilisateurAction(){
        $utilisateurs = $this->getDoctrine()->getManager()->getRepository("PW6UserBundle:User")->findAll();
        return $this->render('PW6UserBundle:Admin:indexUtilisateur.html.twig', array("page_name"=>"index utilisateur", "utilisateurs"=>$utilisateurs));
    }
}

?>
