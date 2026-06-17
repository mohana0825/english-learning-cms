<?php
session_start();



if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.html");
    exit();
}
$conn = new mysqli("localhost", "root", "", "internship_project");

$category_count = $conn->query("SELECT * FROM categories")->num_rows;
$content_count = $conn->query("SELECT * FROM content")->num_rows;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card p-4 shadow">

        <h2>Welcome, <?php echo $_SESSION['user']; ?> 👋</h2>

<hr>

<div class="row mb-4">

    <div class="col-md-6">
        <div class="card bg-primary text-white text-center p-3">
            <h5>Total Categories</h5>
            <h2><?php echo $category_count; ?></h2>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card bg-success text-white text-center p-3">
            <h5>Total Content</h5>
            <h2><?php echo $content_count; ?></h2>
        </div>
    </div>

</div>

<a href="../category/view_category.php" class="btn btn-primary w-100 mb-2">
    Category
</a>

<a href="../content/view_content.php" class="btn btn-success w-100 mb-2">
    Content
</a>

<a href="../auth/logout.php" class="btn btn-danger w-100">
    Logout
</a>
        
    </div>

</div>

</body>
</html>