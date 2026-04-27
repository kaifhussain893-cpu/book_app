<?php
include "db.php";// database connection
include "head.php";
?>

<div class="register">
  <div class="register-container">
    <h2>Create Your Account</h2>

    <form action="register_process.php" method="POST">
      <input type="text" name="fullname" placeholder="Full Name" required><br>
      <input type="email" name="email" placeholder="Email" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit" class="btn2">Register</button>
    </form>

    <p>Already have an account? <a href="index.php#fifth">Login here</a></p>
  </div>
</div>
