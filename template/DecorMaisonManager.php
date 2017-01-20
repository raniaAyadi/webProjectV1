<?php

require_once('Maison.php');

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 18/01/2017
 * Time: 17:05
 */
class DecorMaisonManager
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

    public function getMaison($id)
    {
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Course.
        $id = (int) $id;
        $req = $this->_db->query('SELECT * FROM maison WHERE id ='.$id);
        $res = $req->fetch();


        //id, title, level, field, shortDescription, fullDescription, path, duration, rating, image
        return new Maison ($res['id'],$res['adresse'],$res['prix'],
            $res['image'],/*$res['date'],$res['nomClient']*/$res['theme']);

    }

    /**
     * @return array
     */
    public function getListMaison()
    {
        // Retourne la liste de tous les courses.

        $maisons = [];

        $req = $this->_db->query('SELECT * FROM maison');

        while ($res = $req->fetch())
        {
            $maisons[] = new Maison($res['id'],$res['adresse'],$res['prix'],
                $res['image']/*$res['date'],$res['nomClient']*/,$res['theme'] );
        }


        return $maisons;
    }

    /********
     * @param Maison $maison
    if($bdd=mysqli_connect('localhost','root','','decoration')){
    echo "connexion réussi";
    {
     $requette="SELECT * FROM maison ";
     $result=mysqli_query($bdd,$requette);
     $donnee=mysqli_fetch_assoc($result);
     $nb=mysqli_num_rows($result);
      if($nb>0);

     *
     */



    public function addMaison(Maison $maison)
    {
        // Préparation de la requête d'insertion.
        if($bdd=mysqli_connect('localhost','root','','decoration')){
        if  ((isset ($_POST["adresse"]) ) && (isset($_POST["prix"]))&& (isset($_POST["image"])) && (isset($_POST["date"])&& (isset($_POST["nomClient"]))))
        {
            $adresse=$_POST["adresse"];
            $prix=$_POST["prix"];
            $image=$_POST["image"];
            $date=$_POST["date"];
            $nomClient=$_POST["nomClient"];
            $requette="insert into maison values ('$adresse','$prix','$image','$date','$nomClient')";
            $result=mysqli_query($bdd,$requette);


        }
        }
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
    public function updateEquipe(Equipe $equipe)
    {
        // Prépare une requête de type UPDATE.
        // Assignation des valeurs à la requête.
        // Exécution de la requête.
    }
}
?>
}