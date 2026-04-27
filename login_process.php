<?php
include "db.php"; // connect to database

$email = $_POST['email'];
$password = $_POST['password'];

// Check if email and password exist in database
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    echo "<h3>Login successful!</h3>";
    echo "<a href='report.php'>Go to Report Form</a>";
} else {
    echo "<h3>Invalid email or password!</h3>";
    echo "<a href='index.php#fifth'>Try Again</a>";
}
?>
