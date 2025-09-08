<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch student details
    $sql = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $student = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="update_student.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $student['name']; ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $student['email']; ?>" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="<?php echo $student['phone']; ?>" required><br><br>

        <input type="submit" value="Update Student">
    </form>
</body>
</html>
