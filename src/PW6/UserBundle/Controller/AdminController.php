<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PW6\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;

class AdminController extends Controller{

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
