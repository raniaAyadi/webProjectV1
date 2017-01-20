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
    private $_client;

    //ManyToOne //jointure JoinColumn(name="course_id")// la cle entrangere
    private $_maison;

    /**
     * Comment constructor.
     * @param $_id
     * @param $_commentText
     * @param $_postTime
     * @param $_client
     * @param $_maison
     */
    public function __construct($_id, $_commentText, $_postTime, $_client, $_maison)
    {
        $this->_id = $_id;
        $this->_commentText = $_commentText;
        $this->_postTime = $_postTime;
        $this->_client = $_client;
        $this->_maison = $_maison;
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
        return $this->_client;
    }

    /**
     * @param mixed $user
     */
    public function setClient($client)
    {
        $this->_client = $client;
    }

    /**
     * @return mixed
     */
    public function getMaison()
    {
        return $this->_maison;
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

}