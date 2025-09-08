<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to view_students.php after success
        header("Location: view_students.php");
        exit;
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

