<?php
include "db.php"; // connect to database

// Use a default/fake user id for now (since no login)
$user_id = 1;

$item = $_POST['itemName'];
$desc = $_POST['description'];
$loc = $_POST['location'];
$date = $_POST['date'];
$contact = $_POST['contact'];

$photoName = "";
if (!empty($_FILES['photo']['name'])) {
    $photoName = time() . "_" . $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/" . $photoName);
}

// Insert into database
$sql = "INSERT INTO reports (user_id, item_name, description, location, lost_date, photo, contact)
        VALUES ('$user_id','$item','$desc','$loc','$date','$photoName','$contact')";

if(mysqli_query($conn, $sql)){
    echo "<h3>Report submitted successfully!</h3>";
    echo "<a href='report.php'>Submit another report</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
