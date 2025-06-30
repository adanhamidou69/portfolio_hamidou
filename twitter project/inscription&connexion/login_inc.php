<?php
//require_once 'connection.php';
if (isset($_POST["Login"])) {
    if (!empty($_POST["email"]) and !empty($_POST["password"])) {
        $email = htmlspecialchars($_POST["email"]);
        $password = sha1($_POST["password"]);

        $recupUser = $bdd->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $recupUser->execute(array($email, $password));

        if ($recupUser->rowcount() > 0) {
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $_SESSION["id"] = $recupUser->fetch()["id"];
            header("Location: ../dashbord.php");
        }
    } else {
        echo "Votre mot de passe ou email est incorrect...";
    }
}
