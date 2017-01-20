<?php
 //session_start(); // Starting Session

require_once('MySQLDatabase.php');
//require_once('DecorClientManager.php');
/*
$postdata = file_get_contents("php://input");
$postdata = json_decode($postdata);
*/

//BDD

$mySQLDatabase = new MySQLDatabase();
$db = $mySQLDatabase->getConnection();

//Manager
//$decorClientManager = new DecorClientManager($db);


//$error=''; // Variable To Store Error Message


//if (isset($_POST['submit'])) {
   // echo "rania" ;
    if (empty($_POST['email2']) || empty($_POST['password2'])) {
        echo "Email or Password is invalid";
    }
    else
    {
// Define $email  and $password
        $email=$_POST['email2'];
        $password=$_POST['password2'];
      //  echo "wsel4" ;

// SQL query to fetch information of registerd users and finds user match.
        //$client = $decorClientManager->verifClient($email, $password);

        $requette="SELECT * FROM client WHERE login='$login' AND password='$password'";
        $result=mysqli_query($bdd,$requette);
        $nb=mysqli_num_rows($result);

        //echo "wsel5" ;

        if ($nb==   1) {
           // $_SESSION['login_user']=$email; // Initializing Session
           //  $_SESSION['user_id']=$client->getId();
           header("location:index.php"); // Redirecting To Other Page
       }
       else {
            if($nb==0)
            {
                $error = "Username or Password is invalid";
                echo $error ;
            }


    }
   // }
} ?>