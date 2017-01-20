<?php
if($bdd=mysqli_connect('localhost','root','','decoration')){
    if  ((isset ($_POST["firstName"]) ) && (isset($_POST["lastName"]))&& (isset($_POST["email"])) && (isset($_POST["password"])))
    {
        $firstName=$_POST["firstName"];
        $lastName=$_POST["lastName"];
        $email=$_POST["email"];
        $password=$_POST["password"];

        $requette="insert into client values ('$FirstName','$LastName','$email','$password')";
        $result=mysqli_query($bdd,$requette);
         header('Location:index.php');

    }
    else header('location:indexLogin.php');
    }
    ?>
