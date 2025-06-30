<?php

$servername = "localhost:3306";
$username = "adan";
$password = "azerty42";
$database = "cinema.sql";
 


$connexion = new mysqli($servername, $username, $password, $database);
 
 
if (!$connexion) {
 
    die("Connection échouée : " . mysqli_connect_error());
 
}


$name = $_POST ['id_distributor'];

$sql = "INSERT INTO movie (id_distributor) VALUES ('$name')";
if ($connexion->query($sql)===TRUE){
    echo "c bon";
}
else{
    echo "Erreur";
}






?>