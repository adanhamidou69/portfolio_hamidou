
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cinema</title>
    <link rel="stylesheet" href="my_cinema.css">
    
</head>
<body>
    
    <hr>


    <table>
    <tr>
        <th>Id du film</th>
        <th>Nom</th>
        <th>Pays</th>

        <div class="barre_recherche">
        <a href="my_cinema.php">Accueil</a>
  <a href="#a_propos">A propos</a>
  <a href="#contact">Contact</a>
</div> 




<div id="a_colorier">

    
  
    <form action = "cinema_recherche.php"  method="post">
        <input type="text" name="id_distributor" required     placeholder="Rechercher.."><br>
        
    </div>
      

<?php
$servername = "localhost:3306";
$username = "adan";
$password = "azerty42";
$database = "cinema.sql";
 


$connexion = mysqli_connect($servername, $username, $password, $database);
 

 
if (!$connexion) {
 
    die("Connection échouée : " . mysqli_connect_error());
 
}


$sql = 'SELECT * FROM  distributor ';
$resultat = mysqli_query($connexion,$sql);

if(mysqli_num_rows($resultat)>0) {
    while($ligne_de_table = mysqli_fetch_assoc($resultat)) {
        echo "<tr><td>" . $ligne_de_table["id"] ."<td/><td>" . $ligne_de_table["name"]  ."<td/><td>". $ligne_de_table["country"] . "</td></tr>";
    }
}
echo "</table>";



mysqli_close($connexion);
?>
</table>
</body>
</html>
    
   