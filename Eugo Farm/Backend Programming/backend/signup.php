<?php

include 'DBConnector.php';

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    //check if username is in database
    $user = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $user);
    if (!$result->num_rows > 0) {
        //check if password and confirm password are equal
        if ($password == $cpassword) {
            //validate password
            $pass = $_POST['password'];
            $uppercase = preg_match('@[A-Z]@', $pass);
            $number    = preg_match('@[0-9]@', $pass);
            $specialChars = preg_match('@[^\w]@', $pass);
            if (!$uppercase || !$number || !$specialChars || strlen($pass) < 8) {
                echo "<script>alert('Password should have at least 8 characters, containing at least 1 capital letter, 1 number, and 1 symbol.')</script>";
            } else {
                $sql = "INSERT INTO users (username, email, password)
                VALUES ('$username', '$email', '$password')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Account is successfully created.')</script>";
                    $username = "";
                    $email = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                } else {
                    echo "<script>alert('Something went wrong.')</script>";
                }
            }
        } else {
            echo "<script>alert('Password not matched.')</script>";
        }
    } else {
        echo "<script>alert('Username already exists. Enter a unique username.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/style_login.css">

    <title>Eugo Farm Register Form</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-username">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" placeholder="Password" name="password" required>
                <span class="eye" onclick="password_show_hide()">
                    <i class="fas fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash" id="hide_eye"></i>
                </span>
            </div>
            <div class="input-group">
                <input type="password" id="cpassword" placeholder="Confirm Password" name="cpassword" required>
                <span class="ceye" onclick="password_show_hide2()">
                    <i class="fas fa-eye" id="show_eye2"></i>
                    <i class="fas fa-eye-slash" id="hide_eye2"></i>
                </span>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
    <script type="text/javascript" src="../JavaScript/toggle.js"></script>
</body>

</html>