<?php
require_once('Service.php');

class DecorServiceManager

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


    public function getService($id)
    {
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Course.
        $id = (int) $id;
        $req = $this->_db->query('SELECT * FROM service WHERE id ='.$id);
        $res = $req->fetch();


        //id, title, level, field, shortDescription, fullDescription, path, duration, rating, image
        return new service ($res['id'],$res['image'],
            $res['titre'], $res['descrip']);

    }

    /**
     * @return array
     */
    public function getListService()
    {
        // Retourne la liste de tous les courses.

        $services = [];

        $req = $this->_db->query('SELECT * FROM service');

        while ($res = $req->fetch())
        {
            $services[] = new Service($res['id'],
                $res['image'],
                $res['titre'],
                $res['descrip']);
        }


        return $services;
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
