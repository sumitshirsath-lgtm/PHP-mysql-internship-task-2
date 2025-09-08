<link rel="stylesheet" type="text/css" href="style.css">

<?php
// Show all errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
include 'db.php';

// Fetch all students
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

echo "<h2>All Students</h2>";

if(mysqli_num_rows($result) > 0){
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>
            <a href='edit_student.php?id=".$row['id']."'>Edit</a> | 
            <a href='delete_student.php?id=".$row['id']."' onclick=\"return confirm('Are you sure you want to delete this student?');\">Delete</a>
          </td>";
    echo "</tr>";
}



    echo "</table>";
} else {
    echo "No students found in the database.";
}

mysqli_close($conn);
?>
