<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer son profil</title>
    <link rel="stylesheet" href="../View/edit_profil.css">
</head>
<body>
 
 
    <title>Mon profil</title>
  <head>
 
  <body>
<?php
include('../View/header.php');
?>
    <br>
    <br>
 
<center>
    <h2>Bienvenue</h2>
    </center>
    <br>
    <br>
    <br>
 
         <center>
   <div> Informations: </div>
   </center>
   <br>
   <br>
   <br>
 
    <ul>
 
      <li>Votre pseudo  : <?= $servername = 
      "";
$username = "alphadrame";
$password = "alpha";
$database = "common_database";
 


$connexion = mysqli_connect($servername, $username, $password, $database);
 

 
if (!$connexion) {
 
    die("Connection échouée : " . mysqli_connect_error());
 
}


$sql = 'SELECT * FROM  users LIMIT 1';
$resultat = mysqli_query($connexion,$sql);

if(mysqli_num_rows($resultat)>0) {
    while($ligne_de_table = mysqli_fetch_assoc($resultat)) {
        echo "<tr><td>"  . $ligne_de_table["username"]  ."<td/><td>".  "</td></tr>";
    }
}
echo "</table>"; ?>  </li>
      <br>
      <br>
   <br>
   <br>
 
      <li>Votre mail : <?=  $servername = 
      "";
$username = "alphadrame";
$password = "alpha";
$database = "common_database";
 


$connexion = mysqli_connect($servername, $username, $password, $database);
 

 
if (!$connexion) {
 
    die("Connection échouée : " . mysqli_connect_error());
 
}


$sql = 'SELECT * FROM  users LIMIT 1';
$resultat = mysqli_query($connexion,$sql);

if(mysqli_num_rows($resultat)>0) {
    while($ligne_de_table = mysqli_fetch_assoc($resultat)) {
        echo "<tr><td>"  . $ligne_de_table["email"]  ."<td/><td>".  "</td></tr>";
    }
}
echo "</table>";
      
      
      
      
      
      
      ?></li>
      <br>
      <br>
   <br>
   <br>
 
      <li>Votre compte a été crée le : <?= 
      $servername = 
      "";
$username = "alphadrame";
$password = "alpha";
$database = "common_database";
 


$connexion = mysqli_connect($servername, $username, $password, $database);
 

 
if (!$connexion) {
 
    die("Connection échouée : " . mysqli_connect_error());
 
}


$sql = 'SELECT * FROM  users LIMIT 1';
$resultat = mysqli_query($connexion,$sql);

if(mysqli_num_rows($resultat)>0) {
    while($ligne_de_table = mysqli_fetch_assoc($resultat)) {
        echo "<tr><td>"  . $ligne_de_table["created_at"]  ."<td/><td>".  "</td></tr>";
    }
}
echo "</table>";
      
      
      
      ?></li>
 
 
    </ul>
 
<br>
<br>
<br>
<br>
 
  </body>
 
<?php
include('../View/footer.php');
?>
</html>
 
<?php
 
session_start();
 
include('../Controller/connection.php');
 
 
 
if(!isset($_SESSION['id'])){
 
    header('profil_update.php');
    
    exit;
 
  }
 
  // On récupère les informations de l'utilisateur connecté
  
  $afficher_profil = $DB->query("SELECT *
 
    FROM utilisateur
 
    WHERE id = ?",
 
array($_SESSION['id']));
 
  
 
$afficher_profil = $afficher_profil->fetch();