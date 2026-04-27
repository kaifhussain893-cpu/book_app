<?php
include "db.php"; // connect to database

$fullname = $_POST['fullname'];
$email    = $_POST['email'];
$password = $_POST['password'];

// Simple insert without hashing (easy method)
$sql = "INSERT INTO users (fullname, email, password) 
        VALUES ('$fullname','$email','$password')";

if(mysqli_query($conn, $sql)){
    echo "<h3>Account created successfully!</h3>";
    echo "<a href='index.php#fifth'>Go to Login</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
