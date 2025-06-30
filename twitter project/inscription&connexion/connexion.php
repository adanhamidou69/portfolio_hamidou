
<?php
if(isset($_POST["Login"])){
if(!empty($_POST["email"]) AND !empty($_POST["password" ])){
    $email = htmlspecialchars($_POST["email"]);
    $password = sha1($_POST["password"]);

    $recupUser = $bdd->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $recupUser->execute(array($email, $password));

    if($recupUser->rowcount() > 0){
$_SESSION["email"] =$email;
$_SESSION["password"] =$password;
$_SESSION["id"] =$recupUser->fetch()["id"];
header("Location: /dashbord.php");
    }
}
else{
    echo "Votre mot de passe ou email est incorrect...";
}


}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="/View/style.css">
</head>

<body>
    <header>
        <nav class="navigation">
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close-circle-outline"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <!-- C'était la ligne en dessous qui nous bloquait -->
            <form action="dashbord.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn"     >Login</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="inscription.html" class="register-link">S'inscrire</a>
                    </p>
                </div>
            </form>
        </div>

        
    </div>

 

    
    <script src="sript.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>

</html>

