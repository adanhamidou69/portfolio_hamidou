<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>director</th>

<?php
$servername = "localhost:3306";
$username = "adan";
$password = "azerty42";
$database = "cinema.sql";
 


$connexion = mysqli_connect($servername, $username, $password, $database);
 

 
if (!$connexion) {
 
    die("Connection échouée : " . mysqli_connect_error());
 
}
echo ".";

$sql = 'SELECT * FROM movie ';
$resultat = mysqli_query($connexion,$sql);

if(mysqli_num_rows($resultat)>0) {
    while($ligne_de_table = mysqli_fetch_assoc($resultat)) {
        echo "<tr><td>" . $ligne_de_table["id"] ."<td/><td>" . $ligne_de_table["title"]  ."<td/><td>". $ligne_de_table["director"] . "</td></tr>";
    }
}
echo "</table>";
{
    echo "Le programme ne fonctionne pas";
}

mysqli_close($connexion);
?>
</table>
