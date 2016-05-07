<?php
    namespace PW6\FormationBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

    class AdvertController extends Controller {

        public function viewAction($id) {
            return $this->render('PW6FormationBundle:Advert:view.html.twig', array('id' => $id));
        }

        public function addAction(Request $req) {
            $session = $req->getSession();
            $session->getFlashBag()->add('info', 'Annonce bien enregistrée');
            $session->getFlashBag()->add('info', 'Oui oui, elle est bien enregistrée !');
            return $this->redirectToRoute('pw6_formation_view', array('id' => 5));
        }

        public function indexAction($page) {
            if ($page < 1) {
                throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
            }
            return $this->render('PW6FormationBundle:Advert:index.html.twig');
        }
    }
?>
