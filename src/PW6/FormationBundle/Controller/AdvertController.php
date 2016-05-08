<?php
    namespace PW6\FormationBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

    class AdvertController extends Controller {

        public function indexAction($page) {
            $mailer = $this->container->get('mailer');
            if ($page < 1) {
                throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
            }
            return $this->render('PW6FormationBundle:Advert:index.html.twig',
                array('listAdverts' => array()
            ));
        }

        public function viewAction() {
            $advert = new Advert;
            $advert->setContent('TEMPO');
            return $this->render('PW6FormationBundle:Advert:view.html.twig', array('advert' => $advert));
        }

        public function addAction(Request $req) {
            $antispam = $this->container->get('pw6_formation.antispam');

            $text = "...";
            if($antispam->isSpam($text)) {
                throw new \Exception('Votre message a été détecté comme spam !');
            }

            if($req->isMethod('POST')){
                $req->getSession()->getFlashBag()->add('notice', 'Formation bien enregistrée.');
                return $this->redirectToRoute('pw6_formation_view', array('id' => 5));
            }
            return $this->render('PW6FormationBundle:Advert:add.html.twig');
        }

        public function editAction($id, Request $req){
            if($req->isMethod('POST')){
                $req->getSession()->getFlashBag()->add('notice', 'Formation bien modifiée.');
                return $this->redirectToRoute('pw6_formation_view', array('id' => 5));
            }
            return $this->render('PW6FormationBundle:Advert:edit.html.twig');
        }

        public function deleteAction($id) {
            return $this->render('PW6FormationBundle:Advert:delete.html.twig');
        }

        public function menuAction($limit) {
            $listAdverts = array(
                array('id' => 2, 'title' => 'Recherche développeur Symfony'),
                array('id' => 5, 'title' => 'Mission de webmaster'),
                array('id' => 9, 'title' => 'Offre de stage webdesigner')
            );
            return $this->render('PW6FormationBundle:Advert:menu.html.twig', array('listAdverts' => $listAdverts));
        }
    }
?>
