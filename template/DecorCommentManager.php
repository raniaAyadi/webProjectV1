<?php
require_once('Comment.php');

class DecorCommentManager
{
    private $_db; // Instance de PDO.

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }


    public function getComment($id)
    {
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Course.
        $id = (int) $id;
        $req = $this->_db->query('SELECT * FROM comment WHERE id ='.$id);
        $res = $req->fetch();


        //id, title, level, field, shortDescription, fullDescription, path, duration, rating, image
        return new comment ($res['id'],$res['commentText'],$res['postTime'],$res['cli'],
            $res['telephone'], $res['email'],$res['metier'],
            $res['shortDescrip']);

    }


    /**
     * @return array
     */
    public function getListComment($maisonId)
    {
        // Retourne la liste de tous les courses.

        $comments = [];

        $req = $this->_db->query("SELECT * FROM comment where maisonId=$maisonId order by postTime desc");

        while ($res = $req->fetch())
        {
            //id, commentText, postTime, user, course
            $comments[] = new Comment($res['id'],$res['commentText'],$res['postTime'],
                $res['clientId'], $res['maisonId']);
        }


        return $comments;
    }



    public function addComment(Comment $c)
    {
        // Préparation de la requête d'insertion.

        $req = $this->_db->prepare('INSERT INTO comment SET commentText = :commentText, postTime = :postTime, clientId = :clientId, maisonId = :maisonId');

        $req->bindValue(':commentText',$c->getCommentText());
        $req->bindValue(':postTime', $c->getPostTime());
        $req->bindValue(':clientId', $c->getClient());
        $req->bindValue(':maisonId', $c->getMaison());


// Exécution de la requête.
        $req->execute();
    }



}