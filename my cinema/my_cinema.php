
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cinema</title>
    <link rel="stylesheet" href="my_cinema.css">
    
</head>
<body>
    <div id="titre">
        <h1 height="40">My Cinema</h1>
    </div>
    <hr>
    
    <table>
        <tr>
            
            <div id="Id">  <th>Id de film</th>  </div>


            <div id="Title">  <th>&nbsp;   &nbsp;  Titre</th>  </div>
            
            
            
            <div id="Director">  <th>&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
            &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;    &nbsp;  &nbsp;  &nbsp;  &nbsp;      Réalistaeur</th>  </div>


            
            <div id="a_colorier">
            
            <div class="barre_recherche">
                <a href="my_cinema.php">Accueil</a>
                <a href="#a_propos">À propos</a>
                <a href="#contact">Contact</a>
            </div> 
            
            
                
                
            <br>
            <div id="register">Register</div>
            
            <br>
            
            <label> Nom d'utilisateur :</label>
    <form action = "cinema_recherche.php"  method="post">
        <input type="text" name="id_distributor" required     placeholder="..."><br>
        
        
        
        
        <label>Mot de passe :</label>
        <form action = "cinema_recherche.php"  method="post">
            <input type="password" id="pass" name="password" minlength="8" required    placeholder="..."><br>

            
            
            
            <label> E-mail :</label>
            <form action = "cinema_recherche.php"  method="post">
                <input type="mail" id="email" pattern=".+@example\.com" size="30" required    placeholder="..."><br>
                
                <br>
                <br>
                
                <input type="submit" value="Se connecter" />
                <br><br>
                
                
                <label>Recherche de film par distributeur : </label>
                <form action = "cinema_recherche.php"  method="post">
                    <br>
                    
                    <a href="my_cinema_page2.php">Voir les films classés par distributeurs des films (clique)</a>
                    
                    <br>
                    <br>
                    
                    
                    
                    
                    
                    <label>Recherche de film par genre :</label>
                    <form action = "cinema_recherche.php"  method="post">
                        <br>
                        
                        <a href="my_cinema_page3.php">Voir les films classés par genre (clique)</a>
                        
                        <br>
                        <br>
                        
                        
                        <label>Recherche membre par son nom :</label>
                        <form action = "cinema_recherche.php"  method="post">
                            <br>
                            
                            <a href="my_cinema_page5.php"> (clique) pour rechercher les membres par leur nom  </a>
                            
                            <br>
                            <br>
                            
                            
                            
                            <h2>Quels films passent ce soir?</h2>
                            
                            
                            <a href="my_cinema_page4.php">Voir les films du soir (clique)</a>
                            
                            
                            
                            
                            
                            <h2>Tous les films :</h2>
                            
                            <hr>
                            
                            <br>
                            
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


$sql = 'SELECT * FROM movie ';
$resultat = mysqli_query($connexion,$sql);

if(mysqli_num_rows($resultat)>0) {
    while($ligne_de_table = mysqli_fetch_assoc($resultat)) {
        echo "<tr><td>" . $ligne_de_table["id"] ."<td/><td>" . $ligne_de_table["title"]  ."<td/><td>". $ligne_de_table["director"] . "</td></tr>";
    }
}
echo "</table>";

mysqli_close($connexion);
?>
</table>
</body>
</html>
    
   