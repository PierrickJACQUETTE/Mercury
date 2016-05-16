<?php

namespace PW6\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PW6\UserBundle\Entity\User;
use PW6\UserBundle\Entity\Personnel;
use PW6\UserBundle\Form\PersonnelType;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdminController extends Controller{

    public function addAction(Request $req){
        $perso = new Personnel();
        $form = $this->createForm(PersonnelType::class, $perso);
        if($form->handleRequest($req)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($perso);
            $em->flush();
            $req->getSession()->getFlashBag()->add("notice", "Nouvelle fiche personnel crée.");
            return $this->redirect($this->generateUrl("pw6_admin_index"));
        }
        return $this->render('PW6UserBundle:Admin:add.html.twig',array('form'=>$form->createView()));
    }

    public function upAction($id){
        $user = $this->getDoctrine()->getManager()->getRepository("PW6UserBundle:User")->find($id);
        if($user == null){
            throw new NotFoundHttpException("Impossible d'ajouter cet utilisateur à la liste des admin (id:".$id.")");
        }
        $role = $user->getRole();
        if($role != 'ROLE_ADMIN'){
            $user->setRole('ROLE_ADMIN');
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }
        return $this->render('PW6UserBundle:Admin:up.html.twig');
    }

    public function indexAction(){
        $list = $this->getDoctrine()->getRepository('PW6UserBundle:Personnel')->findAll();
        return $this->render('PW6UserBundle:Admin:index.html.twig', array('list' => $list));
    }
}

?>
