<?php

namespace PW6\UserBundle\Entity;

/**
 * Personnel
 */
class Personnel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $fname;

    /**
     * @var string
     */
    private $pname;

    /**
     * @var \DateTime
     */
    private $birth;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var bool
     */
    private $sex;

    /**
     * @var bool
     */
    private $contrat;

    /**
     * @var int
     */
    private $time;

    /**
     * @var int
     */
    private $salary;

    /**
     * @var string
     */
    private $superieur;

    /**
     * @var int
     */
    private $formation;

    public function __construct(){
        $this->date = new \DateTime();
        $this->formation = 7;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fname
     *
     * @param string $fname
     *
     * @return Personnel
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set pname
     *
     * @param string $pname
     *
     * @return Personnel
     */
    public function setPname($pname)
    {
        $this->pname = $pname;

        return $this;
    }

    /**
     * Get pname
     *
     * @return string
     */
    public function getPname()
    {
        return $this->pname;
    }

    /**
     * Set birth
     *
     * @param \DateTime $birth
     *
     * @return Personnel
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set sex
     *
     * @param boolean $sex
     *
     * @return Personnel
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return bool
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set contrat
     *
     * @param boolean $contrat
     *
     * @return Personnel
     */
    public function setContrat($contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return bool
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * Set time
     *
     * @param integer $time
     *
     * @return Personnel
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set salary
     *
     * @param integer $salary
     *
     * @return Personnel
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return int
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set superieur
     *
     * @param string $superieur
     *
     * @return Personnel
     */
    public function setSuperieur($superieur)
    {
        $this->superieur = $superieur;

        return $this;
    }

    /**
     * Get superieur
     *
     * @return string
     */
    public function getSuperieur()
    {
        return $this->superieur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Personnel
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set formation
     *
     * @param integer $formation
     *
     * @return Personnel
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return integer
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Personnel
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}
