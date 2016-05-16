<?php
    namespace PW6\UserBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Security\Core\SecurityContext;
    use PW6\UserBundle\Entity\User;
    use PW6\UserBundle\Form\UserType;

    class SecurityController extends Controller {
        public function loginAction(Request $req)
        {
            if($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')){
                return $this->redirect($this->generateUrl("pw6_user_view", array('id'=>$this->getUser()->getId())));
            }
            $authenticationUtils = $this->get('security.authentication_utils');
            return $this->render('PW6UserBundle:Security:login.html.twig',
                array(
                    'last_username' => $authenticationUtils->getLastUsername(),
                    'error'         => $authenticationUtils->getLastAuthenticationError()
                ));
        }

        public function signinAction(Request $req){
            if($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')){
                return $this->redirect($this->generateUrl("pw6_user_view", array('id'=>$this->getUser()->getId())));
            }
            $user = new User();
            $form = $this->createForm(UserType::class, $user);
            if($form->handleRequest($req)->isValid()){
                $password = $this->get('security.password_encoder')->encodePassword($user, $user->getPassword());
                $user->setPassword($password);
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $req->getSession()->getFlashBag()->add("notice", "Vous avez bien été enregistré");
                return $this->redirect($this->generateUrl("pw6_user_view", array('id'=>$user->getId())));
            }
            return $this->render('PW6UserBundle:Security:signin.html.twig',array('form'=>$form->createView()));
        }
    }


?>
