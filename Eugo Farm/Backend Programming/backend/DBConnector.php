<?php

$servername = "localhost";
$username = "root";            //default username
$password = "";                //default password
$dbname = "eugo farm";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//========================== BLOG ============================================
$sql = "SELECT * FROM blog";
$query = mysqli_query($conn, $sql);

// Get post data based on id
if (isset($_REQUEST['blog_id'])) {
    $id = $_REQUEST['blog_id'];

    $sql = "SELECT * FROM blog WHERE blog_id = $id";
    $query = mysqli_query($conn, $sql);
}
