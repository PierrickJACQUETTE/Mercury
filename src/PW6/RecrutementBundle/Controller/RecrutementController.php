<?php
namespace PW6\RecrutementBundle\Controller;

use PW6\RecrutementBundle\Entity\Recrutement;
use PW6\RecrutementBundle\Entity\ApplicationRecrutement;
use PW6\RecrutementBundle\Form\RecrutementType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class RecrutementController extends Controller{

  public function indexAction()  {
    $listAdverts = $this->getDoctrine()->getRepository('PW6RecrutementBundle:Recrutement')->findAll();
    return $this->render('PW6RecrutementBundle:Advert:index.html.twig', array('listAdverts' => $listAdverts));
  }

  public function gestionCandidatAction()  {
    $listAdverts = $this->getDoctrine()->getRepository('PW6RecrutementBundle:Recrutement')->findAll();
    return $this->render('PW6RecrutementBundle:Advert:gestionCandidat.html.twig', array('listAdverts' => $listAdverts));
  }

  public function viewAction($id) {
    $em = $this->getDoctrine()->getManager();
    $advert = $em->getRepository('PW6RecrutementBundle:Recrutement')->find($id);
    if(null === $advert){
      throw new NotFoundHttpException('L\'annonce d\'id '.$id.' n\'existe pas.');
    }

    $listApplications = $em
    ->getRepository('PW6RecrutementBundle:ApplicationRecrutement')
    ->findBy(array('advert' => $advert));

    return $this->render('PW6RecrutementBundle:Advert:view.html.twig',
    array('advert' => $advert, 'listApplications' => $listApplications));
  }

  /**
  * @Security("has_role('ROLE_AUTEUR')")
  */
  public function addAction(Request $req) {
    $advert = new Recrutement();
    $form = $this->get('form.factory')->create(RecrutementType::class, $advert);

    if($req->isMethod('POST') && $form->handleRequest($req)->isValid()){
      $em = $this->getDoctrine()->getManager();
      $advert->setAuthor($this->getUser());
      $em->persist($advert);
      $em->flush();

      $req->getSession()->getFlashBag()->add('notice', 'Recrutement bien enregistrée.');
      return $this->redirectToRoute('pw6_recrutement_view', array('id' => $advert->getID()));
    }
    return $this->render('PW6RecrutementBundle:Advert:add.html.twig', array('form' => $form->createView()));
  }

  public function editAction($id, Request $req){
    $repository = $this->getDoctrine()->getManager()->getRepository('PW6RecrutementBundle:Recrutement');
    $advert = $repository->find($id);
    if(null === $advert){
      throw new NotFoundHttpException('L\'annonce d\'id '.$id.' n\'existe pas.');
    }

    $form = $this->get('form.factory')->create(RecrutementType::class, $advert);

    if($req->isMethod('POST') && $form->handleRequest($req)->isValid()){
      $advert->setUpdatedAt(new \DateTime());
      $em = $this->getDoctrine()->getManager();
      $em->persist($advert);
      $em->flush();

      $req->getSession()->getFlashBag()->add('notice', 'Recrutement bien enregistrée.');
      return $this->redirectToRoute('pw6_recrutement_view', array('id' => $advert->getID()));
    }
    return $this->render('PW6RecrutementBundle:Advert:edit.html.twig',
    array('advert' => $advert, 'form' => $form->createView()));
  }

  public function addAnonymeAction($id, Request $req) {
      $advert = new ApplicationRecrutement();
      $form = $this->get('form.factory')->create(ApplicationType::class, $advert);

      if($req->isMethod('POST') && $form->handleRequest($req)->isValid()){
        $em = $this->getDoctrine()->getManager();
        $advert->setAuthor($this->getUser());
        $file = $product->getBrochure();
        $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
        $file->move($brochuresDir, $fileName);
        $product->setBrochure($fileName);
        $em->persist($advert);
        $em->flush();

        $req->getSession()->getFlashBag()->add('notice', 'Candidature bien enregistrée.');
        return $this->redirectToRoute('pw6_recrutement_view', array('id' => $id));
      }
      return $this->render('PW6RecrutementBundle:Advert:addCandidat.html.twig', array('form' => $form->createView()));
  }

  public function deleteAction($id, Request $req) {
    $em = $this->getDoctrine()->getManager();
    $advert = $em->getRepository('PW6RecrutementBundle:Recrutement')->find($id);
    if(null === $advert){
      throw new NotFoundHttpException('Le recrutement d\'id '.$id.' n\'existe pas.');
    }
    $form = $this->get('form.factory')->create();
    if($req->isMethod('POST') && $form->handleRequest($req)->isValid()){

      $listApplications = $em
      ->getRepository('PW6RecrutementBundle:ApplicationRecrutement')
      ->findBy(array('advert' => $advert));

      foreach ($listApplications as $item) {
        $em->remove($item);
      }

      $em->remove($advert);
      $em->flush();
      $req->getSession()->getFlashBag()->add('info', "Le recrutement a bien été supprimée.");
      return $this->redirectToRoute('pw6_recrutement_home');
    }
    return $this->render('PW6RecrutementBundle:Advert:delete.html.twig',
    array('advert' => $advert, 'form' => $form->createView()));
  }

  public function menuAction() {
    $listAdverts = $this->getDoctrine()
    ->getRepository('PW6RecrutementBundle:Recrutement')
    ->findBy(array(),array('id' => 'DESC'), 5);
    return $this->render('PW6RecrutementBundle:Advert:menu.html.twig', array('listAdverts' => $listAdverts));
  }
}
?>
