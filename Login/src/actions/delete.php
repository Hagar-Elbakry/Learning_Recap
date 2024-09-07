<?php

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try{
        require_once "dbh.php";
        $sql = "SELECT pwd FROM users WHERE email = :email";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result) {
            if(password_verify($pwd, $result['pwd'])) {
                $sql = "DELETE FROM users WHERE email = :email";
                $stmt=$pdo->prepare($sql);
                $stmt->bindParam(":email", $email);
                $stmt->execute();
            }
        }
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
