<?php
if($bdd=mysqli_connect('localhost','root','','decoration')){
    if  ((isset ($_POST["login"]) ) && (isset($_POST["password"]))&& (isset($_POST["nom"])) && (isset($_POST["prenom"])))
    {
        $login=$_POST["login"];
        $password=$_POST["password"];
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $requette="insert into client values ('$nom','$prenom','$login','$password')";
        $result=mysqli_query($bdd,$requette);
        ?>
        <a href=index.php>suivant</a>
    <?php
    }
    }
    ?>
