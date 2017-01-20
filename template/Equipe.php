<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 18/01/2017
 * Time: 15:55
 */
class equipe
{

    private $_id;
    private $_nom;
    private $_prenom;
    private $_telephone;
    private $_email;
    private $_metier;
    private $_shortDescrip;
    private $_image;

    /**
     * equipe constructor.
     * @param $_id
     * @param $_nom
     * @param $_prenom
     * @param $_telephone
     * @param $_email
     * @param $_metier
     * @param $_shortDescription
     */


    public function __construct($_id, $_nom, $_prenom,$_image, $_telephone, $_email, $_metier, $_shortDescrip)
    {
        $this->_id = $_id;
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_image = $_image;
        $this->_telephone = $_telephone;
        $this->_email = $_email;
        $this->_metier = $_metier;
        $this->_shortDescrip = $_shortDescrip;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->_image;
    }

    public function setImage($image)
    {
        $this->_image = $image;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }
    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->_telephone;
    }

    /**
     * @param mixed $field
     */
    public function setTelephone($telephone)
    {
        $this->_telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $field
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }



    /**
     * @return mixed
     */
    public function getMetier()
    {
        return $this->_metier;
    }

    /**
     * @param mixed $shortDescription
     */
    public function setMetier($metier)
    {
        $this->_metier = $metier;
    }


    /**
     * @return mixed
     */
    public function getShortDescrip()
    {
        return $this->_shortDescrip;
    }

    /**
     * @param mixed $shortDescription
     */
    public function setShortDescription($shortDescrip)
    {
        $this->_shortDescription = $shortDescrip;
    }



}