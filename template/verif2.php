<?php
session_start();
if($bdd=mysqli_connect('localhost','root','','decoration')){
    if  ((isset ($_POST["firstName"]) ) && (isset($_POST["lastName"]))&& (isset($_POST["email"])) && (isset($_POST["password"])))
    {
        $firstName=$_POST["firstName"];
        $lastName=$_POST["lastName"];
        $email1=$_POST["email"];
        $password1=$_POST["password"];

        $requette="insert into client(firstName,lastName,email,password) values ('$first','$last','$email1','$password1')";
       // "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
        $result=mysqli_query($bdd,$requette);
        $donnee=mysqli_fetch_assoc($result);

        $_SESSION['login_user']=$donnee['firstName']; // Initializing Session
        $_SESSION['user_id']=$donnee['id'];
        header('Location:index.php');

    }
    else
        echo "remplir les champ  " ;
        //header('location:indexLogin.php');
    }

    else echo"connexion echou ";
    ?>
