<?php
include "form.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error {
            color: red;
        }
    </style>
    <title>My Form</title>
</head>
<body>
    <span class="error">* Required  Field</span><br><br>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        User Name : <input type="text" name="username" placeholder="Enter your username">
        <span class="error">*<?php echo $userNameErr;?></span>
        <br><br>
        Password  : <input type="password" name="password" placeholder="Enter your Password">
        <span class="error">*<?php echo $passwordErr;?></span>
        <br><br>
        Email     : <input type="email" name="email" placeholder="Enter your Email">
        <span class="error">*<?php echo $emailErr;?></span>
        <br><br>
        Age       : <input type="number" name="age" placeholder="Enter your age"><br><br>
        Gender    : <span class="error">*<?php echo $genderErr;?></span><br>
        <input type="radio" name="gender" value="male"> Male <br>
        <input type="radio" name="gender" value="female"> Female <br>
        <input type="radio" name="gender" value="perfer_not_to_say"> Perfer Not To Say 
        <br><br>
        <input type="submit" name="submit">

        <?php
        echo "<h2>Your Input</h2>";
        echo "User Name is : $userName <br>";
        echo "Password is : $password <br>";
        echo "Email is : $email <br>";
        echo "Age is : $age <br>";
        echo "Gender is : $gender <br>";
        
        ?>
    </form>
</body>
</html>