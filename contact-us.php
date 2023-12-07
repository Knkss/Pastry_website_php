<?php
session_start();

include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us | Pastry Retail</title>
	<link rel="stylesheet" href="style.css">
    <style>
        /* Contact Form */

.contact-form {
    max-width: 500px;
    margin: 0 auto;
  }
  
  .contact-form h2 {
    text-align: center;
    font-size: 36px;
    margin-bottom: 30px;
  }
  
  .contact-form label {
    display: block;
    font-size: 18px;
    margin-bottom: 10px;
  }
  
  .contact-form input[type="text"],
  .contact-form input[type="email"],
  .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
  }
  
  .contact-form textarea {
    height: 150px;
  }
  
  .contact-form button[type="submit"] {
    background-color: #ff6f60;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }
  
  .contact-form button[type="submit"]:hover {
    background-color: #ee524f;
  }
  
  .contact-form .form-message {
    font-size: 16px;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
    color: #ff6f60;
    display: none;
  }
  
  .contact-form .form-message.success {
    color: #50c878;
    display: block;
  }
  
  /* Contact Info */
  
  .contact-info {
    max-width: 500px;
    margin: 0 auto;
    margin-top: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  
  .contact-info h2 {
    font-size: 36px;
    margin-bottom: 30px;
  }
  
  .contact-info p {
    font-size: 18px;
    margin-bottom: 20px;
  }
  
  .contact-info .address {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .contact-info .address i {
    font-size: 20px;
    margin-right: 10px;
  }
  
  .contact-info .phone {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .contact-info .phone i {
    font-size: 20px;
    margin-right: 10px;
  }
  
  .contact-info .email {
    display: flex;
    align-items: center;
  }
  
  .contact-info .email i {
    font-size: 20px;
    margin-right: 10px;
  }
    </style>
</head>
<body>
	<header>
		<div>
			<nav>
				<ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                  </ul>
			</nav>
		</div>
	</header>

    <h1>Contact Us</h1>
	
  	<section id="contact">
  		<div class="container">
  			<div class="contact-form">
  				<h2>Get In Touch</h2>
  				<form action="contact.php" method="post">
  					<label for="name">Name</label>
  					<input type="text" id="name" name="name" placeholder="Enter your name" required>
  					
  					<label for="email">Email</label>
  					<input type="email" id="email" name="email" placeholder="Enter your email" required>
  					
  					<label for="subject">Subject</label>
  					<input type="text" id="subject" name="subject" placeholder="Enter subject" required>
  					
  					<label for="message">Message</label>
  					<textarea id="message" name="message" placeholder="Enter your message" required></textarea>
  					
  					<button type="submit">Send Message</button>
  				</form>
  			</div>
  			<div class="contact-details">
  				<h2>Contact Details</h2>
  				<p>Feel free to get in touch with us. We're always here to help.</p>
  				<ul>
  					<li><i class="fa fa-map-marker"></i>123 Main Street, Anytown, USA</li>
  					<li><i class="fa fa-phone"></i>(123) 456-7890</li>
  					<li><i class="fa fa-envelope"></i>info@pastryretail.com</li>
  				</ul>
  			</div>
  		</div>
  	</section>
    <script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             
                console.log(this.responseText);
            }
        };
        xhr.open("POST", "contact.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var subject = document.getElementById('subject').value;
        var message = document.getElementById('message').value;
        
        xhr.send("name=" + name + "&email=" + email + "&subject=" + subject + "&message=" + message);
    });
</script>

	<footer>
		<div class="container">
			<p>&copy; 2023 Pastry Retail. All Rights Reserved.</p>
		</div>
	</footer>
</body>
</html>
