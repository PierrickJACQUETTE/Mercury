<?php

namespace PW6\UserBundle\Repository;

/**
* PersonnelRepository
*
* This class was generated by the Doctrine ORM. Add your own custom
* repository methods below.
*/
class PersonnelRepository extends \Doctrine\ORM\EntityRepository{

  public function myFindSalary($min, $max){
    $qb = $this->createQueryBuilder('p');
    $qb->where('p.salary BETWEEN :start AND :end')->setParameter('start', $min)
    ->setParameter('end', $max);
    return $qb->getQuery()->getResult();
  }

  public function myFindAge($min, $max){
    $qb = $this->createQueryBuilder('p');
    $qb->where('p.birth BETWEEN :start AND :end')
    ->setParameter('start', new \Datetime($min.'-01-01'))
    ->setParameter('end', new \Datetime($max.'-01-01'));
    return $qb->getQuery()->getResult();
  }

}
