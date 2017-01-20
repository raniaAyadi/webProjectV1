<?php
if($bdd=mysqli_connect('localhost','root','','decoration')){
    if  ((isset ($_POST["firstName"]) ) && (isset($_POST["lastName"]))&& (isset($_POST["email"])) && (isset($_POST["password"])))
    {
        $firstName=$_POST["firstName"];
        $lastName=$_POST["lastName"];
        $email=$_POST["email"];
        $password=$_POST["password"];

        $requette="insert into client values ('$firstName','$lastName','$email','$password')";
        $result=mysqli_query($bdd,$requette);
         header('Location:index.php');

    }
    else
        echo "vous " ;
        //header('location:indexLogin.php');
    }

    else echo"connexion echou ";
    ?>
