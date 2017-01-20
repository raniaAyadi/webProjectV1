<?php
if($bdd=mysqli_connect('localhost','root','','decoration')){
    echo "connexion réussi";
    if  ((isset ($_POST["login"]) ) && (isset($_POST["password"])))
    {
        $email=$_POST["login"];
        $password=$_POST["password"];
        $requette="SELECT * FROM client WHERE email='$login' AND passeword='$password'";
        $result=mysqli_query($bdd,$requette);
        $nb = mysqli_num_rows($result);
    }
    else{
        echo "<h3>login et/ou mot de passe érroné</h3>";
        ?>
        <br><center><a href=connexion.php>retour</a></center>
        <?php
    }

    if ($nb>0){

        session_start();
        $_SESSION['login_client'] = $login;
        header('Location:index.php');
    }
    else  echo " vous n'étes un membre" ;

}
else
    echo "connexion echoue";

?>
