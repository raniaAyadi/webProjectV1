<?php include "MySQLDatabase.php"; ?>
<?php include "DecorCommentManager.php"; ?>

<?php
//if($bdd=mysqli_connect('localhost','root','','decoration')) {
    if (isset($_REQUEST['comment']) && isset($_REQUEST['firstName']) && isset($_REQUEST['clientId']) && isset($_REQUEST['maisonId'])) {

        $commentText = $_REQUEST['comment'];
        $firstName = $_REQUEST['firstName'];
        $clientId = $_REQUEST['clientId'];
        $maisonId = $_REQUEST['maisonId'];

        $date = new DateTime();
        $time = $date->format('Y-m-d');

        $comment = new Comment(null, $commentText, $time, $clientId, $firstName,$maisonId);

        //BDD
        $mySQLDatabase = new MySQLDatabase();
        $bdd = $mySQLDatabase->getConnection();

        //Manager
        $decorComment = new DecorCommentManager($bdd);

        $decorComment->addComment($comment);
        //$requette = "insert into comment(NULL ,commentText,postTime,clientId,maisonId) values (NULL ,'$commentText','$time','$clientId','$maisonId')";
        // "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
        //$result = mysqli_query($bdd, $requette);
        echo "
        
        
        <div class=\"media\">
                    <a class=\"pull-left\" href=\"#\">
                        <img class=\"media-object\" src=\"http://placehold.it/64x64\" alt=\"\">
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">$firstName
                            <small>$time</small>
                        </h4>
                        $commentText
                    </div>
                </div>
                
        
";

    }
?>