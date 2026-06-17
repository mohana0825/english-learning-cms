<?php
$conn = new mysqli("localhost", "root", "", "internship_project");

$category = $_POST['category'];
$word = $_POST['word'];
$meaning = $_POST['meaning'];
$example = $_POST['example'];

$sql = "INSERT INTO content (category, word, meaning, example)
VALUES ('$category', '$word', '$meaning', '$example')";

if ($conn->query($sql) === TRUE) {
    echo "Content Added Successfully";
} else {
    echo "Error";
}
?>