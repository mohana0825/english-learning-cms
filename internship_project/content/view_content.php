<?php
$conn = new mysqli("localhost", "root", "", "internship_project");

$search = "";

if(isset($_GET['search']) && $_GET['search'] != "")
{
    $search = $_GET['search'];

    $result = $conn->query(
        "SELECT * FROM content
         WHERE word LIKE '%$search%'
         OR category LIKE '%$search%'
         OR meaning LIKE '%$search%'"
    );
}
else
{
    $result = $conn->query("SELECT * FROM content");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Content</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">Content List</h2>

    <!-- Search Form Starts Here -->
    <form method="GET" class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Search by word, category or meaning"
                    value="<?php echo $search; ?>">
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">
                    Search
                </button>
            </div>

            <div class="col-md-2">
                <a href="view_content.php" class="btn btn-secondary">
                    Reset
                </a>
            </div>
        </div>
    </form>
    <!-- Search Form Ends Here -->

    <a href="add_content.php" class="btn btn-success mb-3">
        + Add Content
    </a>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Word</th>
                <th>Meaning</th>
                <th>Example</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

        <?php while($row = $result->fetch_assoc()) { ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['word']; ?></td>
                <td><?php echo $row['meaning']; ?></td>
                <td><?php echo $row['example']; ?></td>

                <td>
                    <a href="edit_content.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>

                    <a href="delete_content.php?id=<?php echo $row['id']; ?>" 
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