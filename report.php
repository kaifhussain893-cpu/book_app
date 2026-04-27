<?php
include "db.php"; // database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>report</title>
  <link rel="stylesheet" href="./css/report.css">

</head>
<body>
  
</body>
</html>

<div class="container">
    <h2>Report a Lost Item</h2>

    <form action="report_process.php" method="POST" enctype="multipart/form-data">

      <div>
        <label for="itemName">Item Name</label>
        <input type="text" id="itemName" name="itemName" placeholder="e.g. abc" required />
      </div>

      <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" placeholder="Describe your lost item..." required></textarea>
      </div>

      <div>
        <label for="location">Where did you lose it?</label>
        <input type="text" id="location" name="location" placeholder="e.g. Near library" required />
      </div>

      <div>
        <label for="date">Date Lost</label>
        <input type="date" id="date" name="date" required />
      </div>

      <div>
        <label for="photo">Upload Photo (optional)</label>
        <input type="file" id="photo" name="photo" accept="image/*" />
      </div>

      <div>
        <label for="contact">Your Contact Info</label>
        <input type="email" id="contact" name="contact" placeholder="Enter your email or phone" required />
      </div>

      <button type="submit">Submit Report</button>
    </form>
</div>
