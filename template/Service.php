<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 22/01/2017
 * Time: 13:39
 */
class service
{


    private $_id;
    private $_image;
    private $_descrip;
    private $_titre;

    /*
     *
     *
     */

    public function __construct($_id, $_image, $_titre,$_descrip)
    {
        $this->_id = $_id;
        $this->_image = $_image;
        $this->_titre = $_titre;
        $this->_descrip = $_descrip;
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
    public function getTitre()
    {
        return $this->_titre;
    }

    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }


    public function getDesrip()
    {
        return $this->_descrip;
    }

}