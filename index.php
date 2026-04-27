<?php
include "header.php";
include "head.php";
include "footer.php";
?>
  <section id="hero">
    <div class="hero-text">
      <h1>Lost Something On Campus?<br>Let’s Help You Find It</h1>
      <p>Searched every corner of campus? Don’t stress! Post, search, or report lost <br>and found items in minutes.</p>

      <div class="btn-group">
        <button onclick="location.href='report.php'" class="btn-secondary">Report an Item</button>
        <button onclick="location.href='browse.php'" class="btn-primary">Browse Lost Items</button>
      </div>
    </div>

    <div class="hero-image">
      <!-- <img src="https://cdn-icons-png.flaticon.com/512/7068/7068787.png" alt="Illustration"> -->
      
    </div>
  </section>

  <div id="container">
    <h1>Pickup Guidelines</h1>
    <ol>
      <li>Bring your valid student ID card or CNIC for verification.</li>
      <li>Visit the Lost & Found Office located in the Admin Block, Room #12.</li>
      <li>Check item details with the staff before claiming.</li>
      <li>Only the registered owner or authorized person can collect the item.</li>
      <li>Unclaimed items will be held for 30 days before donation or disposal.</li>
      <li>Office timings: Monday–Friday, 9:00 AM to 4:00 PM.</li>
    </ol>

    <p>Thank you for using Findr — helping students stay organized and stress-free!</p>
  </div>
<div id="third">
  <h1>Help Centre</h1>
  <p style="text-align:center; color: rgb(204, 229, 227);">
    Find quick answers to common questions about using Findr.
  </p>

  <div class="faq">
    <h3>🟢 How do I report a lost item?</h3>
    <p>Go to the “Report Lost Item” page, fill in all details like item name, location, and upload a photo. Then click “Submit”.</p>
  </div>

  <div class="faq">
    <h3>🟢 How can I claim my item?</h3>
    <p>Browse through the lost items list, find your item, and click on “Claim Item”. Provide proof of ownership if required.</p>
  </div>

  <div class="faq">
    <h3>🟢 How long does Findr keep lost items?</h3>
    <p>All unclaimed items are stored safely for 30 days before being handed over to the administration.</p>
  </div>

  <div class="faq">
    <h3>🟢 Who can I contact for urgent help?</h3>
    <p>You can reach out directly through the <a href="contact.html">Contact page</a> or visit the lost and found office on campus.</p>
  </div>

  <div class="note">
    Still need help? Visit our <a href="contact.html">Contact</a> page or email support@findr.com.
  </div>
</div>  

<div id="fifth" id="login-section">
  <div class="login-container">
    <h2>Login Form</h2>
    <form action="login_process.php" method="POST">
      <input type="email" name="email" placeholder="Enter your email" required><br>
      <input type="password" name="password" placeholder="Enter your password" required><br>
      <button type="submit" class="btn1">Login</button>
    </form>
    <p>Don’t have an account? <a href="register.php">Register here</a></p>
  </div>
</div>
</div>



<section id="contact-section">

    <div class="contact-header">
        Get In Touch With Us Now
    </div>

    <div class="contact-grid">

        <div class="contact-card">
            <div class="icon">📞</div>
            <h3>Phone Number</h3>
            <p>+92 300 1234567</p>
        </div>

        <div class="contact-card">
            <div class="icon">✉</div>
            <h3>Email</h3>
            <p>info_findr@gmail.com</p>
            <p>support_findr@gmail.com</p>
        </div>

        <div class="contact-card">
            <div class="icon">📍</div>
            <h3>Location</h3>
            <p>123 Main Street, Karachi, Pakistan</p>
        </div>

        <div class="contact-card">
            <div class="icon">⏰</div>
            <h3>Working Hours</h3>
            <p>Monday – Saturday</p>
            <p>09:00 AM – 06:00 PM</p>
        </div>

        <div class="contact-card">
            <div class="icon">📸</div>
            <h3>Instagram</h3>
            <p>@findr_official</p>
        </div>

        <div class="contact-card">
            <div class="icon">📘</div>
            <h3>Facebook</h3>
            <p>facebook.com/findr</p>
        </div>

    </div>

</section>
   <footer>
    © 2025 Findr | All Rights Reserved
  </footer>