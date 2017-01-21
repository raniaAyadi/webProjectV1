<?php
if($bdd=mysqli_connect('localhost','root','','decoration')){
    if  ((isset ($_POST["name"]) ) && (isset($_POST["email"]))&& (isset($_POST["subject"])) && (isset($_POST["message"]))) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $requette="insert into messages(name,email,subject,message) values('$name','$email','$subject','$message')";
        mysqli_query($bdd,$requette);
        //mysqli_query("INSERT INTO messages(name,email,subject,message)VALUES ($name, $email, $subject, $message)") ;

        echo "success" ;
        // "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
    }}
    ?>
