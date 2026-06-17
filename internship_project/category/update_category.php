<?php

$conn = new mysqli("localhost", "root", "", "internship_project");

$id = $_POST['id'];
$category_name = $_POST['category_name'];

$sql = "UPDATE categories SET category_name='$category_name' WHERE id=$id";

$conn->query($sql);

header("Location: view_category.php");
exit();

?>