<?php
 session_start();

 include "./edit_profil.php";


 if(isset($_POST['edit']))
 {   $username=$_POST['username'];
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
 }

 $select= "select * from users where username =  '$username'  ";
 $sql = mysqli_query($conn,$select);
 $row = mysqli_fetch_assoc($sql);

 $resultat =  $row['username'];

 if ($resultat === $username) {
   $update = "Mise à jour paramètres utilisateurs    username =  '$username'";
       $sql2=mysqli_query($conn,$update);
 }






 





