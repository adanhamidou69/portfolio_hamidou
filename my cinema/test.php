<?php 

include './recup_database.php'; 
                $sql = 'SELECT * FROM movie ';
                $resultat = $connexion->query($sql);
                
                foreach ($resultat as $resultat) :
           
             echo     $resultat["id"]; 
             echo      $resultat["title"];
            
                    endforeach; ?>