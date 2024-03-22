<?php
session_start();

require_once 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dopebox</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="navbar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#news">News</a></li>
      <li><a href="login.html">Login</a></li>
    </ul>
  </div>
  
  <div class="hero-section">
    <div class="content">
      <h1>Welcome to Our Website</h1>
      <p>This is Dopebox and it is the best place to get youre music in the world</p>
    </div>
  </div>

  <div id="about" class="about-section">
    <h2>About Us</h2>
    <p>We believe that music has the power to inspire, uplift, and bring people together. That's why we've created 
      the ultimate destination for music lovers everywhere. With a vast selection of albums spanning every genre 
      imaginable, we're committed to providing you with the best music experience possible.
      At our store, you'll find not only the latest releases but also rare gems and timeless classics. 
      Our team is passionate about music, and we're here to help you discover new favorites and rediscover old ones.
      With low prices, fast shipping, and exceptional customer service, we strive to make every purchase a 
      delightful experience. Whether you're a casual listener or a dedicated collector, we invite you to explore our 
      store and immerse yourself in the world of music.</p>
  </div>

  <div id="contact" class="contact-section">
    <h2>Contact Us</h2>
    <div class="contact-info">
      <p>123 Main Street</p>
      <p>City, Country</p>
      <p>Email: Dopebox@gmail.com</p>
      <p>Phone: +1234567890</p>
    </div>
    <div class="map">
      <!-- You can embed a map here using Google Maps or any other mapping service -->
      <h2>Our Location</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12077.119722963548!2d-74.00594135444148!3d40.7127764430368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa9bbee6d3c0ae62e!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1631642521159!5m2!1sen!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
  <div id="news" class="news-section">
    <h2>News</h2>
    
    <p>Exciting times for music lovers! Several highly anticipated albums are hitting the shelves this month, 
      spanning various genres from hip-hop to rock. Get ready to groove to fresh beats and powerful lyrics as 
      artists unleash their latest creations, promising to captivate listeners worldwide.</p>
      
    
  </div>
  

  </body>

</html>
