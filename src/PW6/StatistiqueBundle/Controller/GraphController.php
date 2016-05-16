<?php

namespace PW6\StatistiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\DateTime;

use Ob\HighchartsBundle\Highcharts\Highchart;

class GraphController extends Controller{

  public function indexAction(){
    return $this->render('PW6StatistiqueBundle:Graph:index.html.twig');
  }

  public function sexeAction(){
    $repository = $this->getDoctrine()->getManager()->getRepository('PW6UserBundle:Personnel');
    $advert = $repository->findBySex("0");
    $nbHomme = count($advert);
    $advert = $repository->findBySex("1");
    $nbFemme = count($advert);

    $ob = new Highchart();
    $ob->chart->renderTo('pie');
    $ob->title->text('Proportion homme femme ');
    $ob->plotOptions->pie(array(
      'allowPointSelect'  => true,
      'cursor'    => 'pointer',
      'dataLabels'    => array('enabled' => false),
      'showInLegend'  => true
    ));
    $data = array(
      array('Femme', $nbFemme),
      array('Homme', $nbHomme),
    );
    $ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));

    return $this->render('PW6StatistiqueBundle:Graph:graphPie.html.twig', array(
      'pie' => $ob
    ));
  }

  public function contratAction(){
    $repository = $this->getDoctrine()->getManager()->getRepository('PW6UserBundle:Personnel');
    $advert = $repository->findByContrat("0");
    $nbcdd = count($advert);
    $advert = $repository->findByContrat("1");
    $nbcdi = count($advert);

    $ob = new Highchart();
    $ob->chart->renderTo('pie');
    $ob->title->text('Proportion CDD CDI ');
    $ob->plotOptions->pie(array(
      'allowPointSelect'  => true,
      'cursor'    => 'pointer',
      'dataLabels'    => array('enabled' => false),
      'showInLegend'  => true
    ));
    $data = array(
      array('CDD', $nbcdd),
      array('CDI', $nbcdi),
    );
    $ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));

    return $this->render('PW6StatistiqueBundle:Graph:graphPie.html.twig', array(
      'pie' => $ob
    ));
  }

  public function salaireAction(){
    $repository = $this->getDoctrine()->getManager()->getRepository('PW6UserBundle:Personnel');
    $nb1400 = 1400;
    $nb1500 = 1500;
    $nb1700 = 1700;
    $nb1900 = 1900;
    $nb2100 = 2100;
    $nb2300 = 2300;
    $nb2500 = 2500;
    $nb10000 = 10000;
    $dates = array($nb1400.'-'.$nb1500, $nb1500.'-'.$nb1700, $nb1700.'-'.$nb1900,
    $nb1900.'-'.$nb2100, $nb2100.'-'.$nb2300, $nb2300.'-'.$nb2500,
    $nb2500.'-'.$nb10000);
    $advert = $repository->myFindSalary($nb1400,$nb1500);
    $nb1400 = count($advert);
    $advert = $repository->myFindSalary($nb1500,$nb1700);
    $nb1500 = count($advert);
    $advert = $repository->myFindSalary($nb1700,$nb1900);
    $nb1700 = count($advert);
    $advert = $repository->myFindSalary($nb1900,$nb2100);
    $nb1900 = count($advert);
    $advert = $repository->myFindSalary($nb2100,$nb2300);
    $nb2100 = count($advert);
    $advert = $repository->myFindSalary($nb2300,$nb2500);
    $nb2300 = count($advert);
    $advert = $repository->myFindSalary($nb2500,$nb10000);
    $nb2500 = count($advert);

    $sellsHistory = array(array("name" => "Personne",
        "data" => array($nb1400, $nb1500, $nb1700, $nb1900, $nb2100, $nb2300,
        $nb2500)),);

    $ob = new Highchart();
    $ob->chart->renderTo('barchart');
    $ob->title->text('Salaire de Mercury');
    $ob->chart->type('column');

    $ob->yAxis->title(array('text' => "Nombre de personne"));

    $ob->xAxis->title(array('text' => "Salaire en €"));
    $ob->xAxis->categories($dates);

    $ob->series($sellsHistory);

    return $this->render('PW6StatistiqueBundle:Graph:graphBar.html.twig', array(
      'barchart' => $ob));
  }

  public function ageAction(){
    $repository = $this->getDoctrine()->getManager()->getRepository('PW6UserBundle:Personnel');
    $dateActuelle = date("Y-m-d H:i:s");
    $dateD = date("Y-m-d H:i:s")-20;
    $res = array();
    $dates = array();
    $advert = $repository->myFindAge($dateD,$dateActuelle);
    array_push($res,count($advert));
    array_push($dates,20);
    $dateActuelle -= 20;
    $dateD -= 5;
    for($i = 20;$i<70;$i+=5){
      $advert = $repository->myFindAge($dateD,$dateActuelle);
      array_push($res,count($advert));
      array_push($dates,$i+5);
      $dateD-=5;
      $dateActuelle-=5;
    }

    $sellsHistory = array(array("name" => "Personne",
        "data" => $res),);

    $ob = new Highchart();
    $ob->chart->renderTo('barchart');
    $ob->title->text('Age du Personnel de Mercury');
    $ob->chart->type('column');

    $ob->yAxis->title(array('text' => "Nombre de personne"));

    $ob->xAxis->title(array('text' => "Age en années"));
    $ob->xAxis->categories($dates);

    $ob->series($sellsHistory);

    return $this->render('PW6StatistiqueBundle:Graph:graphBar.html.twig', array(
      'barchart' => $ob));

  }

}
