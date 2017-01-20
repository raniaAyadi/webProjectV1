<?php
if($bdd=mysqli_connect('localhost','root','','decoration')){
    if  ((isset ($_POST["firstName"]) ) && (isset($_POST["lastName"]))&& (isset($_POST["email"])) && (isset($_POST["password"])))
    {
        $first=$_POST["firstName"];
        $last=$_POST["lastName"];
        $email1=$_POST["email"];
        $password1=$_POST["password"];

        $requette="insert into client(firstName,lastName,email,password) values ('$first','$last','$email1','$password1')";
       // "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
        $result=mysqli_query($bdd,$requette);

         header('Location:index.php');

    }
    else
        echo "vous" ;
        //header('location:indexLogin.php');
    }

    else echo"connexion echou ";
    ?>
