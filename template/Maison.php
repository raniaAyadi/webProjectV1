<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 18/01/2017
 * Time: 16:08
 */
class maison
{

    private $_id;
    private $_adresse;
    private $_prix;
    private $_image;
    private $_dateM;
    private $_nomClient;
    private $_theme;
    private $_description;

    /**
     * maison constructor.
     * @param $_id
     * @param $_adresse
     * @param $_prix
     * @param $_image
     * @param $_dateM
     * @param $_nomClient
     */


    public function __construct($_id, $_adresse, $_prix, $_image, $_theme, $_nomClient, $_dateM,$_description)
    {
        $this->_id = $_id;
        $this->_adresse = $_adresse;
        $this->_prix = $_prix;
        $this->_image = $_image;
        $this->_theme = $_theme;
        $this->_nomClient = $_nomClient;
        $this->_date = $_dateM;
        $this->_description=$_description;


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
    public function getAdresse()
    {
        return $this->_adresse;
    }

    /**
     * @param mixed $nom
     */
    public function setAdresse($adresse)
    {
        $this->_adresse= $adresse;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->_prix;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrix($prix)
    {
        $this->_prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * @param mixed $field
     */
    public function setImage($image)
    {
        $this->_image = $image;
    }


    public function getTheme()
    {
        return $this->_theme;
    }

    /**
     * @param mixed $id
     */
    public function setTheme($id)
    {
        $this->_id = $id;
    }
    /**
     * @return mixed
     */
    public function getNomClient()
    {
        return $this->_nomClient;
    }


    public function setNomClient($nomClient)
    {
        $this->_nomClient = $nomClient;
    }

    public function getDateM()
    {
        return $this->_dateM;
    }


    public function setDate($date)
    {
        $this->_dateM = $date;
    }

    public function getDescription()
    {
        return $this->_description;
    }


    public function setDescription($des)
    {
        $this->_description = $des;
    }
}