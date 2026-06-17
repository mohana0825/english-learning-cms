<?php

$conn = new mysqli("localhost", "root", "", "internship_project");

$id = $_GET['id'];

$sql = "DELETE FROM categories WHERE id=$id";

$conn->query($sql);

header("Location: view_category.php");
exit();

?>