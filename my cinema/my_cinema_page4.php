
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

    
    <div id="a_colorier">
    
    <table>
        <tr>
            <th>Id de film</th>
            <th>Date de sortie</th>
            
            
            <div class="barre_recherche">
            <a href="my_cinema.php">Accueil</a>
                <a href="#a_propos">A propos</a>
                <a href="#contact">Contact</a>
            </div> 
            
            
            
                
                <h1>CE SOIR</h1>

                <h2>18H00</h2>


                <div id="affiche_leap">
                <img src="les_evades.jpeg" alt="affiche les évadés"
                width="400" 
                height="500">
                </div>
                 <br>
                <br>
                 
                
                <h2>21H00</h2>

             <div id="display_flex">

                <div id="affiche_guerrier">
                <img src="les_guerriers.webp" alt="affiche les guerrierssss"
                width="400" 
                height="500">
                </div>
                
                <div id="les_cerveaux">
                <img src="les cerveaux.jpg" alt="les cerveaux"
                width="400" 
                height="500">
                </div>

                <div id="bras de fer">
                <img src="bras_de_fer.jpg" alt="bras de fer"
                width="400" 
                height="500">
                </div>

                <div id="jacob">
                <img src="jacobb.jpg" alt="jacob"
                width="400" 
                height="500">
                </div>

          

                <h1>RESTE DES FILMS</h1>
  
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


$sql = 'SELECT * FROM `movie_schedule` ORDER BY `movie_schedule`.`date_begin` DESC    OFFSET 5 ROWS ';
$resultat = mysqli_query($connexion,$sql);

if(mysqli_num_rows($resultat)>0) {
    while($ligne_de_table = mysqli_fetch_assoc($resultat)) {
        echo "<tr><td>" . $ligne_de_table["id"] ."<td/><td>" . $ligne_de_table["id_movie"] . $ligne_de_table["id_room"] . $ligne_de_table["date_begin"]  ."<td/><td>".  "</td></tr>";
    }
}
echo "</table>";



mysqli_close($connexion);
?>
</table>
</body>
</html>
    
   