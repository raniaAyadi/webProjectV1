<?php
session_start(); // Starting Session

require_once('MySQLDatabase.php');
require_once('DecorClientManager.php');
/*
$postdata = file_get_contents("php://input");
$postdata = json_decode($postdata);
*/

//BDD
$mySQLDatabase = new MySQLDatabase();
$db = $mySQLDatabase->getConnection();

//Manager
$decorClientManager = new DecorClientManager($db);


$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email or Password is invalid";
    }
    else
    {
// Define $email  and $password
        $email=$_POST['email'];
        $password=$_POST['password'];

// SQL query to fetch information of registerd users and finds user match.
        $client = $decorClientManager->verifClient($email, $password);
        if ($client !=null) {
            $_SESSION['login_user']=$email; // Initializing Session
            $_SESSION['user_id']=$client->getId();
            header("location: index.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
    }
}
?>

<!--
if($bdd=mysqli_connect('localhost','root','','decoration')){
    echo "connexion réussi";
    if  ((isset ($_POST["email"]) ) && (isset($_POST["password"])))
    {
        $email=$_POST["email"];
        $password=$_POST["password"];
        $requette="SELECT * FROM client WHERE email='$email' AND password='$password'";
        $result=mysqli_query($bdd,$requette);
        $nb = mysqli_num_rows($result);
        if ($nb>0){

            session_start();
            $_SESSION['login_client'] = $email;
            header('Location:index.php');

        }
        else echo "<h2>vous n'etes pas un membre</h2>";
    }
    else{

        //header('Location:indexLogin.php');

     echo "<h2>eronnné </h2>";

    }

}
else
    echo "connexion echoue";

?>  -->