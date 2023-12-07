<?php
session_start();

include('includes/dbconnection.php');


if (isset($_GET['search']) && !empty($_GET['search'])) {
   
    $searchTerm = $_GET['search'];
 
    $stmt = $db->prepare("SELECT * FROM menu WHERE name LIKE CONCAT('%', ?, '%') OR description LIKE CONCAT('%', ?, '%')");
    $stmt->bind_param("ss", $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
    

    if ($result->num_rows == 0) {
      
        echo "<script>alert('No matches found');</script>";
    }
} 
 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu - Pastry Retail</title>
	<link rel="stylesheet" href="style.css">
    <style>
 
.container {
	max-width: 1200px;
	margin: 0 auto;
	padding: 0 20px;
}


/* Menu Section */
.menu {
	margin-top: 80px;
}

.menu h2 {
	font-size: 36px;
	font-weight: bold;
	text-align: center;
	margin-bottom: 40px;
}

.menu-items {
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	grid-gap: 40px;
}

.menu-item {
	background-color: #FFF;
	border-radius: 8px;
	padding: 20px;
	display: flex;
	flex-direction: column;
	align-items: center;
	box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.menu-item img {
	max-width: 100%;
	margin-bottom: 20px;
}

.menu-item h3 {
	font-size: 24px;
	font-weight: bold;
	margin-bottom: 10px;
}

.menu-item p {
	font-size: 16px;
	text-align: center;
	margin-bottom: 20px;
}

.price {
	font-size: 20px;
	font-weight: bold;
	color: #f26724;
	margin-top: auto;
}

.menu-item.active {
  border: 5px solid #f26724;
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
				<li><form action="menu.php" method="get">
    <input type="text" name="search" placeholder="Search...">
    <button type="submit">Search</button>
</form></li>
				
              </ul>
		</nav>
	</header>
	

	<section class="menu">
		<div class="container">
			<h2>Our Menu</h2>
			<div class="menu-items">
				<?php
				// $query = "SELECT * FROM menu";
				$result = mysqli_query($db, "SELECT * FROM menu");
				// $result = mysqli_query($db, $query);
				while($row = mysqli_fetch_assoc($result)) {
					echo '<div class="menu-item">';
					echo '<img src="'.$row['img'].'" alt="Pastry Item">';
					echo '<h3>'.$row['name'].'</h3>';
					echo '<p>'.$row['description'].'</p>';
					echo '<span class="price">$'.$row['price'].'</span>';
            				
if (isset($_SESSION['login'])) {
    echo '<form action="orders.php" method="post">';
    echo '<input type="hidden" name="item" value="'.$row['name'].'">';
    echo '<input type="hidden" name="price" value="'.$row['price'].'">';
    echo '<input type="hidden" name="date" value="'.date("Y-m-d H:i:s").'">';
    echo '<button type="submit">Buy</button>';
    echo '</form>';
} else {
    echo '<a href="login.php">Login to buy</a>';
}



					echo '</div>';
				}
				?>
			</div>
		</div>
	</section>

	<footer>
        <div class="container">
            <p>&copy; 2023 Pastry Retail</p>
        </div>
    </footer>
</body>
   