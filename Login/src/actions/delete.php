<?php

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try{
        require_once "dbh.php";
        $sql = "DELETE FROM users WHERE email=:email AND pwd=:pwd";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pwd", $pwd);    
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