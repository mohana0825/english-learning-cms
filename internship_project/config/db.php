<?php
$conn = new mysqli("localhost", "root", "", "internship_project");

if ($conn->connect_error) {
    die("Database Connection Failed");
}
?>