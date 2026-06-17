<?php

$conn = new mysqli("localhost", "root", "", "internship_project");

if ($conn->connect_error) {
    die("Connection failed");
}

$category_name = $_POST['category_name'];

$sql = "INSERT INTO categories (category_name) VALUES ('$category_name')";

if ($conn->query($sql) === TRUE) {
    echo "Category Added Successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>