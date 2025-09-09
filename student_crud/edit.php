<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $sql = "UPDATE students SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Edit Student</h2>
<form method="post">
    <input type="text" name="name" value="<?= $row['name'] ?>" required><br>
    <input type="email" name="email" value="<?= $row['email'] ?>" required><br>
    <input type="text" name="phone" value="<?= $row['phone'] ?>" required><br>
    <button type="submit" class="btn">Update</button>
</form>
</body>
</html>
