<?php
require_once ('Client.php');
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 18/01/2017
 * Time: 17:39
 */
class DecorClientManager
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

    public function verifClient($email,$password)
    {

        $req = $this->_db->query("select * from client where email='$email' AND password='$password'");

        $res = $req->fetch();

        if ($res !=null)

            return new client($res['_id'],$res['_firstname'], $res['_lastname'], $res['email'],$res['password']) ;

           // header("location: php");index.
           // return new User($res['id'],$res['username'],$res['firstname'], $res['lastname'], $res['email'],$res['password'],
               // $res['address'],$res['image']);

         else
             return null ;
            //header("location: indexLogin.php");
    }


    public function addClient()
    {
        // Préparation de la requête d'insertion.
        /*if ($bdd = mysqli_connect('localhost', 'root', '', 'decoration')) {
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


        }*/
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