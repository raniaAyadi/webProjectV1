<?php


/**
 * Created by PhpStorm.
 * User: asus
 * Date: 20/01/2017
 * Time: 17:09
 */
class comment
{
    private $_id;
    private $_commentText;
    private $_postTime;

    //ManyToOne //jointure JoinColumn(name="user_id")// la cle entrangere
    private $_clientId;

    //ManyToOne //jointure JoinColumn(name="course_id")// la cle entrangere
    private $_maisonId;
    private $_firstName;

    /**
     * Comment constructor.
     * @param $_id
     * @param $_commentText
     * @param $_postTime
     * @param $_client
     * @param $_maison
     */
    public function __construct($_id, $_commentText, $_postTime, $_clientId, $_firstName, $_maisonId)
    {
        $this->_id = $_id;
        $this->_commentText = $_commentText;
        $this->_postTime = $_postTime;
        $this->_clientId = $_clientId;
        $this->_firstName = $_firstName;
        $this->_maisonId = $_maisonId;
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
    public function getCommentText()
    {
        return $this->_commentText;
    }

    /**
     * @param mixed $commentText
     */
    public function setCommentText($commentText)
    {
        $this->_commentText = $commentText;
    }

    /**
     * @return mixed
     */
    public function getPostTime()
    {
        return $this->_postTime;
    }

    /**
     * @param mixed $postTime
     */
    public function setPostTime($postTime)
    {
        $this->_postTime = $postTime;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->_clientId;
    }

    /**
     * @param mixed $user
     */
    public function setClient($client)
    {
        $this->_client = $client;
    }


    public function getFirstName()
    {
        return $this->_firstName;
    }

    /**
     * @param mixed $id
     */
    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getMaison()
    {
        return $this->_maisonId;
    }

    /**
     * @param mixed $course
     */
    public function setMaison($maison)
    {
        $this->_maison = $maison;
    }



}


?>

