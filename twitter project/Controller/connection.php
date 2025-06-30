<?php

$dbtweet = "common_database";
$servername = "localhost";
$user = "alphadrame";
$password = "alpha";

 // Je me connecter a la base de donné 
try{
    $pdo = new PDO("mysql:host=$servername;dbname=$dbtweet", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die ("Erreur:".$e->getMessage());
} 

