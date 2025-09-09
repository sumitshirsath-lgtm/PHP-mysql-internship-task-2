<?php
include 'db.php';
$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Student Records</h2>
<a href="add.php" class="btn">Add Student</a>
<table>
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['phone'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>" class="btn-edit">Edit</a>
            <a href="delete.php?id=<?= $row['id'] ?>" class="btn-delete">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
