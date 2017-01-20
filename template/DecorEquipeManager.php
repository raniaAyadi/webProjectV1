<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 18/01/2017
 * Time: 16:26
 */



require_once('Equipe.php');

class DecorEquipeManager
{


    /** GestionCourse **/

    private $_db; // Instance de PDO.

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }


    public function getEquipe($id)
    {
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Course.
        $id = (int) $id;
        $req = $this->_db->query('SELECT * FROM equipe WHERE id ='.$id);
        $res = $req->fetch();


        //id, title, level, field, shortDescription, fullDescription, path, duration, rating, image
        return new Equipe ($res['id'],$res['nom'],$res['prenom'],$res['image'],
            $res['telephone'], $res['email'],$res['metier'],
            $res['shortDescrip']);

    }

    /**
     * @return array
     */
    public function getListEquipe()
    {
        // Retourne la liste de tous les courses.

        $equipes = [];

        $req = $this->_db->query('SELECT * FROM equipe');

        while ($res = $req->fetch())
        {
            $equipes[] = new Equipe($res['id'],$res['nom'],$res['prenom'],$res['image'],
                $res['telephone'], $res['email'],$res['metier'],
                $res['shortDescrip']);
        }


        return $equipes;
    }


    public function addEquipe(Equipe $equipe)
    {
        // Préparation de la requête d'insertion.

        // Exécution de la requête.
    }

/****
    public function deleteCourse($id)
    {
        // Exécute une requête de type DELETE.
        $this->_db->exec('DELETE  FROM course where id='.$id);

    }
***/
    /*
        public function deleteCourse(Course $course)
        {
            // Exécute une requête de type DELETE.
            $this->_db->exec('DELETE  FROM course where id='.$id);

        }

    */
    public function updateCourse(Equipe $equipe)
    {
        // Prépare une requête de type UPDATE.
        // Assignation des valeurs à la requête.
        // Exécution de la requête.
    }
}
?>
