<?php
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
           ?>
           <!-- <a href=index.php>suivant</a> -->

<?php
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

?>
