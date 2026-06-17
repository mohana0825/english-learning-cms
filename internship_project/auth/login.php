<?php
session_start();
include("../config/db.php");

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header("Location: login.html");
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $_SESSION['user'] = $username;
    header("Location: ../admin/dashboard.php");
    exit();

} else {
    echo "Invalid login";
}
?>