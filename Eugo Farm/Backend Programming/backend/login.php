<?php

include 'DBConnector.php';

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        //Session variable is created
        $_SESSION['username'] = $row['username'];
        //Login time is stored in a session variable
        $_SESSION["login_time_stamp"] = time();
        header("Location: index.php");
    } else {
        echo "<script>alert('Email or Password is incorrect.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome Link cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link rel="stylesheet" type="text/css" href="../CSS/style_login.css">

    <title>Eugo Farm Login</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-username">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <span class="eye" onclick="password_show_hide()">
                    <i class="fas fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash" id="hide_eye"></i>
                </span>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="signup.php"> Register here</a>.</p>
        </form>
    </div>

    <!-- custom js file link -->
    <script type="text/javascript" src="../JavaScript/toggle.js"></script>
</body>

</html>