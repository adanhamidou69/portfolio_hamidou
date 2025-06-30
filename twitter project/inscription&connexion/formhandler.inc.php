<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? null;
    $firstname = $_POST["firstname"] ?? null;
    $lastname = $_POST["lastname"] ?? null;
    $birthdate = $_POST["birthdate"] ?? null;
    $email = $_POST["email"] ?? null;
    $password = $_POST["password"] ?? null;

    try {
        //require_once "connection.php";

        $query = "INSERT INTO users (username, firstname, lastname, birthdate, email, password)
        VALUES (?, ?, ?, ?, ?, ?);";

       // $stmt = $pdo->prepare($query);

       // $stmt->execute([$username, $firstname, $lastname, $birthdate, $email, $password]);

        $pdo = null;
        $stmt = null;

        header("location: ../../Controller/dashbord.php");
    } catch (PDOException $e) {
        die("Query hello: " . $e->getMessage());
    }
} else {
    header("location: ../inscription.html");
}
