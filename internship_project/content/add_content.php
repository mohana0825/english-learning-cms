<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Content</title>
</head>
<body>

<h2>Add Learning Content</h2>

<form action="save_content.php" method="POST">

Category:
<input type="text" name="category"><br><br>

Word:
<input type="text" name="word"><br><br>

Meaning:
<textarea name="meaning"></textarea><br><br>

Example:
<textarea name="example"></textarea><br><br>

<button type="submit">Save</button>

</form>

</body>
</html>