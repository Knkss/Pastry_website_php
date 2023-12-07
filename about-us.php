<?php
session_start();
// error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Us | Pastry Retail</title>
    <link rel="stylesheet" href="style.css">
	
    <style>

  
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
    </style>
</head>
<body>
	<header class="header">
		<a href="index.php" class="logo">Pastry Retail</a>
		<nav class="nav">
			
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                  </ul>
		</nav>
	</header>

	<main>
		<section class="about">
			<div class="container">
                <br>
				<h2>About Us</h2>
				<p>We are a family-owned pastry shop that has been serving the community for over 20 years. Our recipes have been passed down from generation to generation, and we take pride in using only the finest ingredients to create our pastries.</p>
				<p>We specialize in traditional pastries from France, Italy, and Spain. Our pastries are made fresh daily, and we offer a variety of flavors to suit every taste bud. Come visit us and experience the deliciousness that is Pastry Retail.</p>
				<p><em>"Our goal is to provide our customers with the highest quality pastries that not only satisfy their sweet tooth, but also transport them to the countries where these pastries originated."</em></p>
			</div>
		</section>
	</main>

	<footer>
		<div class="container">
			<p>&copy; 2023 Pastry Retail. All Rights Reserved.</p>
		</div>
	</footer>
</body>
</html>
