<?php

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try{
        require_once "dbh.php";
        $sql = "INSERT INTO users (firstname, lastname, pwd, email) VALUES (:firstname, :lastname, :pwd, :email)";
        $stmt=$pdo->prepare($sql);

        $options = [
            'cost' => 12
        ];
        $pwdHashed = password_hash($pwd, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":firstname", $firstName);
        $stmt->bindParam(":lastname", $lastName);
        $stmt->bindParam(":pwd", $pwdHashed);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $pdo = null;
        $stmt = null;
        header("location: ../../public/index.php");
        die();
    } catch(PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("location: ../../public/index.php");
}
