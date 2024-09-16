<?php
include "TestData.php";

$userName = $password = $email = $age = $gender = "";
$userNameErr = $passwordErr = $emailErr = $genderErr = "";

if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(empty($_POST["username"])) {
        $userNameErr = "User Name is required <br>";
    } else {
        $userName = TestData($_POST["username"]);
        if(!preg_match("/^[a-z]\w{2,23}[^_]$/i",$userName)) {
            $userNameErr = "Invalid User Name. User Name should start with lowercase or upercase character, can also contain only underscore and numbers, shouldn't end with underscore and between 4 and 25 character<br>";
        }
    }

    if(empty($_POST["password"])) {
        $passwordErr = "Password is required <br>";
    } else {
        $password = TestData($_POST["password"]);
        if(!preg_match("/^[a-z0-9]\w{8,}[@\$]$/i",$password)) {
            $passwordErr = "Invalid Password. Password should contain lowercase and upercase character, number, {@,$} and minimum 8 characters<br>";
        }
    }

    if(empty($_POST["email"])) {
        $emailErr = "Email is required <br>";
    } else {
        $email = TestData($_POST["email"]);
        // if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        //     $emailErr = "Invalid Email<br>";
        // }
    }

    if(empty($_POST["age"])) {
        $age = "";
    } else {
        $age = TestData($_POST["age"]);
    }

    if(empty($_POST["gender"])) {
        $genderErr = "Gender is required <br>";
    } else {
        $gender = TestData($_POST["gender"]);
    }
}




