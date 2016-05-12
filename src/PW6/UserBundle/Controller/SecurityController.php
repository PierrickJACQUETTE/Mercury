<?php
    namespace PW6\UserBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;

    class SecurityController extends Controller {
        public function loginAction(Request $req)
        {
            if($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')){
                return $this->redirectToRoute('pw6_formation_accueil');
            }
            $authenticationUtils = $this->get('security.authentication_utils');
            return $this->render('PW6UserBundle:Security:login.html.twig',
                array(
                    'last_username' => $authenticationUtils->getLastUsername(),
                    'error'         => $authenticationUtils->getLastAuthenticationError()
                ));
        }
    }
?>
