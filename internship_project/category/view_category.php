<?php
$conn = new mysqli("localhost", "root", "", "internship_project");

$result = $conn->query("SELECT * FROM categories");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Categories</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">Category List</h2>

    <a href="add_category.php" class="btn btn-success mb-3">+ Add Category</a>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

        <?php while($row = $result->fetch_assoc()) { ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['category_name']; ?></td>

                <td>
                    <a href="edit_category.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>

                    <a href="delete_category.php?id=<?php echo $row['id']; ?>" 
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Are you sure?')">
                       Delete
                    </a>
                </td>
            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>

</body>
</html>