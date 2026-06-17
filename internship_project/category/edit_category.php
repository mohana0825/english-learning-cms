<?php
$conn = new mysqli("localhost", "root", "", "internship_project");

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM categories WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Edit Category</h2>

<form action="update_category.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

Category Name:
<input type="text" name="category_name" value="<?php echo $row['category_name']; ?>">

<button type="submit">Update</button>

</form>