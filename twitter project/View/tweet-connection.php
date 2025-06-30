
<?php

$user = "root";
$password = "Salime72395864";

 // Je me connecter a la base de donné 
try{
    $Mydb = new PDO("mysql:host=localhost;dbname=common_database", $user, $password);
    $Mydb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo ("Vous êtes connecté a la base données");
} catch(PDOException $e){
  echo("Probleme de connexion a la base données : ".$e->getMessage());

} 



if(isset($_POST['publier'])) {
        $id = $_POST['id'];
        $parent_id = $_POST['parent_id'];
        $type = $_POST['type'];
        $tweet = $_POST['tweet'];
        $image = $_POST['image'];
        $mention = $_POST['mention'];
        $is_deleted = $_POST['is_deleted'];
        $created_at = $_POST['$created_at'];


        $NewTweet = $Mydb->prepare("INSERT INTO tweets(id, user_id, parent_id, type, tweet, image, mention, is_deleted, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $NewTweet->execute(array($id, $user_id, $parent_id, $type, $tweet, $image, $mention, $is_deleted, $created_at));

        $annonce = "tweet creer !";
         
    }
         
 ?>