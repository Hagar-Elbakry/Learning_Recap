<?php
$dsn = "mysql:host=localhost;dbname=SignUpSystem";
$username = "root";
$password = "";

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE users(
        id INT(11) NOT NULL AUTO_INCREMENT,
        firstname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        pwd VARCHAR(80) NOT NULL,
        email VARCHAR(50) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    )";
    $pdo->exec($sql);
    echo "Table created successfully.";
} catch(PDOException $e) {
    echo  "Error: " . $e->getMessage();
}