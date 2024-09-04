<?php

$dsn = "mysql:host=localhost";
$username = "root";
$password = "";
$dbname = "SignUPSystem";

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $pdo->exec($sql);
    echo "Database $dbname created successfully <br>";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}