<?php
 session_start(); // Starting Session

//require_once('MySQLDatabase.php');
//require_once('DecorClientManager.php');
/*
$postdata = file_get_contents("php://input");
$postdata = json_decode($postdata);
*/

//BDD

//$mySQLDatabase = new MySQLDatabase();
//$db = $mySQLDatabase->getConnection();

//Manager
//$decorClientManager = new DecorClientManager($db);


//$error=''; // Variable To Store Error Message


//if (isset($_POST['submit'])) {
   // echo "rania" ;

if($db=mysqli_connect('localhost','root','','decoration')){
    if (empty($_POST['email2']) || empty($_POST['password2'])) {
        echo "email and password invalid";
    }
    else
    {
// Define $email  and $password
        $email=$_POST['email2'];
        $password=$_POST['password2'];
      //  echo "wsel4" ;

// SQL query to fetch information of registerd users and finds user match.
        //$client = $decorClientManager->verifClient($email, $password);

        $requette="SELECT * FROM client WHERE email='$email' AND password='$password'";
        $result=mysqli_query($db,$requette);
        $donnee=mysqli_fetch_assoc($result);
        $nb=mysqli_num_rows($result);

        //echo "wsel5" ;

        if ($nb==1) {
             $_SESSION['login_user']=$donnee['firstName']; // Initializing Session
             $_SESSION['user_id']=$donnee['id'];
           header("location:index.php"); // Redirecting To Other Page
       }
       else {
            if($nb==0)
            {
                //$error = "Username or Password is invalid";
                //echo $error ;
                echo "vous" ;
            }


    }
   // }
} } ?>