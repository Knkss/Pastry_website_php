<?php
session_start();
// error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pastry Retail</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1>  PPastry Retail</h1>
      
      <nav>
        <ul>
        <li><a href="#">Home</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="user/login.php">Login</a></li>

          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
          <li><button id="sidebar-toggle">More</button></li>
        </ul>
        


<aside id="sidebar">
  <h2></h2>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="admin/login.php">Admin</a></li>
    <li><a href="contact-us.php">Contact Us</a></li>
  </ul>
</aside>
      </nav>
    </header>
    
    <main>
      <section class="banner">
        
        <h2>Welcome to Pastry Retail</h2>
        <p>Indulge in our delicious and freshly baked pastries made with love and the finest ingredients.</p>
        <button id="change-image">></button>
      </section>
      <section class="services">
        <h2>Our Services</h2>
        <div class="services-container">
          <div class="service">
            <img src="images/cakes 1.jpg" alt="Service 1">
            <h3>Cakes</h3>
            <p>Our cakes are made from scratch with the freshest ingredients and are perfect for any occasion.</p>
          </div>
          <div class="service">
            <img src="images/pastry 1.jpg" alt="Service 2">
            <h3>Cupcakes</h3>
            <p>Our cupcakes are baked daily and come in a variety of flavors that are sure to satisfy your sweet tooth.</p>
          </div>
          <div class="service">
            <img src="images/cookies 1.jpg" alt="Service 3">
            <h3>Cookies</h3>
            <p>Our cookies are baked to perfection and are available in a range of flavors including chocolate chip, oatmeal, and more.</p>
          </div>
        </div>
      </section>
      <section class="about">
        <h2>About Us</h2>
        <p>We are a family-owned pastry shop that has been serving the community for over 20 years. We pride ourselves on using only the finest ingredients and creating pastries that are both delicious and beautiful.</p>
        <a href="#" class="btn">Learn More</a>
      </section>
    </main>


<script>
  $(document).ready(function() {
   
    const $sidebar = $('#sidebar');
    const $toggle = $('#sidebar-toggle');

 
    $toggle.on('click', function() {
    
      $sidebar.toggleClass('active');
    });
    
  });
  const images = [
    'images/cake2.jpg',
    'images/cake3.jpg',
    'images/cake4.jpg',
    'images/cake5.jpg'
  ];


  const banner = document.querySelector('.banner');
  const button = document.querySelector('#change-image');



  let imageIndex = 0;


  button.addEventListener('click', function() {
    
  
    imageIndex++;


    if (imageIndex >= images.length) {
      imageIndex = 0;
    }

    banner.style.backgroundImage = `url(${images[imageIndex]})`;
  });

  
</script>
      
    
    <footer>
      <p>&copy; Pastry Retail 2023. All Rights Reserved.</p>
    </footer>
  </body>
</html>
