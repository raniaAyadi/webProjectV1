<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 18/01/2017
 * Time: 17:39
 */
class DecorClientManager
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

    public function getClient($id)
    {

    }

    /**
     * @return array
     */
    public function getListClient()
    {
        // Retourne la liste de tous les courses.

    }

    public function verifClient()
    {

        if ($bdd = mysqli_connect('localhost', 'root', '', 'decoration')) {
            echo "connexion réussi";
            {
                if ((isset ($_POST["login"])) && (isset($_POST["password"]))) {
                    $nom = $_POST["nom"];
                    //$password=$_POST["password"];
                    $requette = "SELECT * FROM client WHERE nom='$nom' ";
                    $result = mysqli_query($bdd, $requette);
                    //$donnee = mysqli_fetch_assoc($result);
                    $nb = mysqli_num_rows($result);
                    if ($nb > 0)
                        echo "welcome" . $_POST['nom'];
                    else
                        echo "vous n'étes pas inscri";
                }
            }
        }
    }
    public function addClient()
    {
        // Préparation de la requête d'insertion.
        if ($bdd = mysqli_connect('localhost', 'root', '', 'decoration')) {
            if ((isset ($_POST["nom"])) && (isset($_POST["prenom"])) && (isset($_POST["telephone"])) && (isset($_POST["email"]))) {
                $nom = $_POST["nom"];
                //$password = $_POST["password"];
                $prenom = $_POST["prenom"];
                $telephone = $_POST["telephone"];
                $email = $_POST["email"];
                $requette = "insert into client values ('$nom','$prenom','$telephone','$email')";
                $result = mysqli_query($bdd, $requette);
            }
            // Exécution de la requête.


        }
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
    /**
    public function updateCourse(Equipe $equipe)
    {
        // Prépare une requête de type UPDATE.
        // Assignation des valeurs à la requête.
        // Exécution de la requête.
    }**/
}
?>

}