<?php



/**
 * Created by PhpStorm.
 * User: asus
 * Date: 18/01/2017
 * Time: 16:22
 */
class client
{


    private $_id;
    private $_firstName;
    private $_lastName;
    private $_email;
    private $_password;
    private $_metier;
    private $_shortDescription;

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


    public function __construct($_id, $_firstName, $_lastName, $_email,$_password)
    {
        $this->_id = $_id;
        $this->_firstName = $_firstName;
        $this->_lastName = $_lastName;
        $this->_email = $_email;
        $this->_password = $_password;



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
    public function getFirstNom()
    {
        return $this->_firstName;
    }

    /**
     * @param mixed $nom
     */
    public function setFirstNom($firstName)
    {
        $this->_firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastNom()
    {
        return $this->_lastName;
    }

    /**
     * @param mixed $prenom
     */
    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $field
     */
    public function setPassword($password)
    {
        $this->_password = $password;
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



}