<?php
    namespace PW6\FormationBundle\Controller;

    use PW6\FormationBundle\Entity\Formation;
    use PW6\FormationBundle\Entity\Application;
    use PW6\FormationBundle\Form\FormationType;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

    class AdvertController extends Controller {

        public function indexAction() {
            $listAdverts = $this->getDoctrine()->getRepository('PW6FormationBundle:Formation')->findAll();
            return $this->render('PW6FormationBundle:Advert:index.html.twig', array('listAdverts' => $listAdverts));
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

            $nb = $advert->getNb();

            return $this->render('PW6FormationBundle:Advert:view.html.twig',
                array('advert' => $advert, 'user'=> $this->getUser(), 'listApplications' => $listApplications, 'nb' => $nb));
        }

        public function addAction(Request $req) {
            $advert = new Formation();
            $form = $this->get('form.factory')->create(FormationType::class, $advert);

            if($req->isMethod('POST') && $form->handleRequest($req)->isValid()){
                $em = $this->getDoctrine()->getManager();
                $advert->setAuthor($this->getUser()->getUsername());
                $em->persist($advert);
                $em->flush();

                $req->getSession()->getFlashBag()->add('notice', 'Formation bien enregistrée.');
                return $this->redirectToRoute('pw6_formation_view', array('id' => $advert->getID()));
            }
            return $this->render('PW6FormationBundle:Advert:add.html.twig', array('form' => $form->createView()));
        }

        public function editAction($id, Request $req){
            $repository = $this->getDoctrine()->getManager()->getRepository('PW6FormationBundle:Formation');
            $advert = $repository->find($id);
            if(null === $advert){
                throw new NotFoundHttpException('L\'annonce d\'id '.$id.' n\'existe pas.');
            }

            $form = $this->get('form.factory')->create(FormationType::class, $advert);

            if($req->isMethod('POST') && $form->handleRequest($req)->isValid()){
                $advert->setUpdatedAt(new \DateTime());
                $em = $this->getDoctrine()->getManager();
                $em->persist($advert);
                $em->flush();

                $req->getSession()->getFlashBag()->add('notice', 'Formation bien enregistrée.');
                return $this->redirectToRoute('pw6_formation_view', array('id' => $advert->getID()));
            }
            return $this->render('PW6FormationBundle:Advert:edit.html.twig',
                array('advert' => $advert, 'form' => $form->createView()));
        }

        public function applyAction($id) {
            $repository = $this->getDoctrine()->getManager()->getRepository('PW6FormationBundle:Formation');
            $advert = $repository->find($id);
            if(null === $advert){
                throw new NotFoundHttpException('L\'annonce d\'id '.$id.' n\'existe pas.');
            }

            $apply = new Application();
            $apply->setAuthor($this->getUser()->getUsername());
            $apply->setAdvert($advert);

            $var = $this->getUser()->getPerso()->getFormation();
            $tmp = $advert->getTime();
            if (($var - $tmp) < 0) {
                return $this->render('PW6FormationBundle:Advert:error.html.twig');
            }

            $tmp = $advert->getNb();
            $advert->setNb($tmp - 1);

            $this->getUser()->getPerso()->setFormation($var - $tmp);

            $em = $this->getDoctrine()->getManager();
            $em->persist($apply);
            $em->flush();

            return $this->render('PW6FormationBundle:Advert:apply.html.twig', array('id' => $id));
        }

        public function deleteAction($id, Request $req) {
            $em = $this->getDoctrine()->getManager();
            $advert = $em->getRepository('PW6FormationBundle:Formation')->find($id);
            if(null === $advert){
                throw new NotFoundHttpException('La formation d\'id '.$id.' n\'existe pas.');
            }
            $form = $this->get('form.factory')->create();
            if($req->isMethod('POST') && $form->handleRequest($req)->isValid()){

                $listApplications = $em
                    ->getRepository('PW6FormationBundle:Application')
                    ->findBy(array('advert' => $advert));

                foreach ($listApplications as $item) {
                    $em->remove($item);
                }

                $em->remove($advert);
                $em->flush();
                $req->getSession()->getFlashBag()->add('info', "La formation a bien été supprimée.");
                return $this->redirectToRoute('pw6_formation_home');
            }
            return $this->render('PW6FormationBundle:Advert:delete.html.twig',
                array('advert' => $advert, 'form' => $form->createView()));
        }

        public function menuAction() {
            $listAdverts = $this->getDoctrine()
                ->getRepository('PW6FormationBundle:Formation')
                ->findBy(array(),array('id' => 'DESC'), 5);
            return $this->render('PW6FormationBundle:Advert:menu.html.twig', array('listAdverts' => $listAdverts));
        }

        public function mineAction(){
            $list = $this->getDoctrine()->getRepository('PW6FormationBundle:Application')->findBy(array('author' => $this->getUser()->getUsername()));
            return $this->render('PW6FormationBundle:Advert:mine.html.twig', array('list' => $list));
        }
    }
?>
