<?php
    namespace PW6\FormationBundle\Controller;

    use PW6\FormationBundle\Entity\Formation;
    use PW6\FormationBundle\Entity\Application;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

    class AdvertController extends Controller {

        public function indexAction($page) {

            $listAdverts = array(
                array(
                    'title'   => 'Recherche développpeur Symfony',
                    'id'      => 1,
                    'author'  => 'Alexandre',
                    'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
                    'date'    => new \Datetime()),
                array(
                    'title'   => 'Mission de webmaster',
                    'id'      => 2,
                    'author'  => 'Hugo',
                    'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
                    'date'    => new \Datetime()),
                array(
                    'title'   => 'Offre de stage webdesigner',
                    'id'      => 3,
                    'author'  => 'Mathieu',
                    'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
                    'date'    => new \Datetime())
            );


            $mailer = $this->container->get('mailer');
            if ($page < 1) {
                throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
            }
            return $this->render('PW6FormationBundle:Advert:index.html.twig',
                array('listAdverts' => array()
            ));
        }

        public function viewAction($id) {
            $em = $this->getDoctrine()->getManager();
            $advert = $em->getRepository('PW6FormationBundle:Formation')->find($id);
            if(null === $advert){
                throw new NotFoundHttpException('L\'annonce d\'id '.$id.' n\'existe pas.');

            }

            $listApplications = $em
                ->getRepository('PW6FormationBundle:Application')
                ->findBy(array('advert' => $advert));

            return $this->render('PW6FormationBundle:Advert:view.html.twig',
                array('advert' => $advert, 'listApplications' => $listApplications));
        }

        public function addAction(Request $req) {

            $advert = new Formation();
            $advert->setTitle('Recherche');
            $advert->setAuthor('Moi');
            $advert->setContent('trouver la motivation');
            $advert->setAt('sur place');
            $advert->setRequirements('None');

            $app1 = new Application();
            $app1->setAuthor('Marine');
            $app1->setContent('Moi Moi');

            $app2 = new Application();
            $app2->setAuthor('Paul');
            $app2->setContent('Je veux');

            $app1->setAdvert($advert);
            $app2->setAdvert($advert);

            $em = $this->getDoctrine()->getManager();
            $em->persist($advert);
            $em->persist($app1);
            $em->persist($app2);
            $em->flush();

            /*$antispam = $this->container->get('pw6_formation.antispam');

            $text = "...";
            if($antispam->isSpam($text)) {
                throw new \Exception('Votre message a été détecté comme spam !');
            }*/

            if($req->isMethod('POST')){
                $req->getSession()->getFlashBag()->add('notice', 'Formation bien enregistrée.');
                return $this->redirectToRoute('pw6_formation_view', array('id' => $advert->getId()));
            }
            return $this->render('PW6FormationBundle:Advert:add.html.twig');
        }

        public function editAction($id, Request $req){

            $repository = $this->getDoctrine()->getManager()->getRepository('PW6FormationBundle:Formation');
            $advert = $repository->find($id);
            if(null === $advert){
                throw new NotFoundHttpException('L\'annonce d\'id '.$id.' n\'existe pas.');

            }

            if($req->isMethod('POST')){
                $req->getSession()->getFlashBag()->add('notice', 'Formation bien modifiée.');
                return $this->redirectToRoute('pw6_formation_view', array('id' => $advert->getId()));
            }
            return $this->render('PW6FormationBundle:Advert:edit.html.twig', array('advert' => $advert));
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
