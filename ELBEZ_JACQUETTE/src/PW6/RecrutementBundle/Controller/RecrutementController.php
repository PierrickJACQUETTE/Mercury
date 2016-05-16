<?php
namespace PW6\RecrutementBundle\Controller;

use PW6\RecrutementBundle\Entity\Recrutement;
use PW6\RecrutementBundle\Entity\ApplicationRecrutement;
use PW6\RecrutementBundle\Form\RecrutementType;
use PW6\RecrutementBundle\Form\ApplicationRecrutementType;

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
    $listAdverts = $this->getDoctrine()->getRepository('PW6RecrutementBundle:Recrutement')->findByResponsable($this->getUser()->getID());
    return $this->render('PW6RecrutementBundle:Advert:gestionCandidat.html.twig', array('listAdverts' => $listAdverts));
  }

  public function viewAction($id) {
    $em = $this->getDoctrine()->getManager();
    $advert = $em->getRepository('PW6RecrutementBundle:Recrutement')->find($id);
    if(null === $advert){
      throw new NotFoundHttpException('L\'annonce d\'id '.$id.' n\'existe pas.');
    }
    $listApplications = null;
    if($this->getUser() != null){
    if($advert->getResponsable() == $this->getUser()->getID()){
      $listApplications = $em
      ->getRepository('PW6RecrutementBundle:ApplicationRecrutement')
      ->findByAdvert($id);
    }}

    return $this->render('PW6RecrutementBundle:Advert:view.html.twig',
    array('advert' => $advert,'user'=> $this->getUser(), 'listApplications' => $listApplications));
  }

  public function addAction(Request $req) {
    $advert = new Recrutement();
    $form = $this->get('form.factory')->create(RecrutementType::class, $advert);

    if($req->isMethod('POST') && $form->handleRequest($req)->isValid()){
      $em = $this->getDoctrine()->getManager();
      $responsable = $advert->getResponsable();
      $responsableID = $em->getRepository('PW6UserBundle:User')->findOneByUsername($responsable);
      if(null === $responsableID){
        throw new NotFoundHttpException('Le responsable n\'existe pas.');
      }
      $advert->setResponsable($responsableID->getID());
      $advert->setAuthor($this->getUser()->getID());
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
      $repository = $this->getDoctrine()->getManager()->getRepository('PW6RecrutementBundle:Recrutement');
      $recrutement = $repository->find($id);
      if(null === $recrutement){
          throw new NotFoundHttpException('L\'annonce d\'id '.$id.' n\'existe pas.');
      }
      $advert = new ApplicationRecrutement();
      $form = $this->get('form.factory')->create(ApplicationRecrutementType::class, $advert);

      if($req->isMethod('POST') && $form->handleRequest($req)->isValid()){
        $em = $this->getDoctrine()->getManager();
        $file = $advert->getCv();
        $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/CV';
        $file->move($brochuresDir, $file);
        $list = split('/',$file);
        $file = $list[2];
        $advert->setCv($file);

        $file = $advert->getLDM();
        $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/LDM';
        $file->move($brochuresDir, $file);
        $list = split('/',$file);
        $file = $list[2];
        $advert->setLDM($file);

        $advert->setAdvert($recrutement);
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
