<?php

namespace PW6\UserBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

/**
* User
*/
class User implements UserInterface
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
    private $password;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $roles;

    /**
    * @var string
    */
    private $salt;

    /**
     * @var Personnel
     */
    private $perso;

    public function __construct(){
        $this->salt = "";
        $this->role = 'ROLE_USER';
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function eraseCredentials(){
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
     * Set username
     *
     * @param string $username
     *
     * @return User
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

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set roles
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * Set perso
     *
     * @param \PW6\UserBundle\Entity\Personnel $perso
     *
     * @return User
     */
    public function setPerso(\PW6\UserBundle\Entity\Personnel $perso = null)
    {
        $this->perso = $perso;

        return $this;
    }

    /**
     * Get perso
     *
     * @return \PW6\UserBundle\Entity\Personnel
     */
    public function getPerso()
    {
        return $this->perso;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }
    /**
     * @var string
     */
    private $role;


    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
