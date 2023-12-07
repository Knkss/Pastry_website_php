<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Pastry Retail - Gallery</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
		
        <style>
 

/* Gallery Styles */

.gallery {
    margin-top: 100px;
    padding: 50px;
    text-align: center;
}

.gallery h2 {
    font-size: 36px;
    margin-bottom: 50px;
    color: #333;
}

.gallery-items {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 30px;
}

.gallery-item {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.2s ease-in-out;
}

.gallery-item:hover {
    transform: scale(1.05);
}

.gallery-item img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.gallery-item h3 {
    font-size: 24px;
    color: #333;
    margin-top: 10px;
    margin-bottom: 20px;
}


        </style>
	</head>
	<body>
		<header>
			<nav>
				<ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                  </ul>
			</nav>
		</header>
        
        <h2 style="text-align: center;" >Our Gallery</h2>
		<section class="gallery">
			
			<div class="gallery-items">
				<div class="gallery-item">
					<img src="images/11.jpg" alt="Gallery Item">
					
				</div>
				<div class="gallery-item">
					<img src="images/12.jpg" alt="Gallery Item">
					
				</div>
				<div class="gallery-item">
					<img src="images/13.jpg" alt="Gallery Item">
					
				</div>
				<div class="gallery-item">
					<img src="images/14.jpg" alt="Gallery Item">
					
				</div>
				<div class="gallery-item">
					<img src="images/15.jpg" alt="Gallery Item">
					
				</div>
				<div class="gallery-item">
					<img src="images/16.jpg" alt="Gallery Item">
					
				</div>
			</div>
		</section>
		<footer>
			<div class="footer-content">
				<p>&copy; 2023 Pastry Retail. All rights reserved.</p>
				<div class="social-icons">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</footer>
	</body>
</html>