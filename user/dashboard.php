<?php
session_start();
// error_reporting(0);
include('../includes/dbconnection.php');


if (!isset($_SESSION['username'])) {
   
    header('Location: login.php');
    exit;
}



$query = "SELECT name, email, address FROM user WHERE username='" . $_SESSION['username'] . "'";
$result = mysqli_query($db, $query);
$user = mysqli_fetch_assoc($result);
$query = "SELECT name FROM user WHERE username='" . $_SESSION['username'] . "'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];




if (isset($_POST['address'])) {

    $query = "UPDATE user SET address='" . $_POST['address'] . "' WHERE username='" . $_SESSION['username'] . "'";
    mysqli_query($db, $query);

    $user['address'] = $_POST['address'];
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Pastry Website</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .big-button {
            display: inline-block;
            background-color: #f4f4f4;
            color: #333;
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 18px;
            text-decoration: none;
            margin-right: 10px;
        }

        .big-button:hover {
            background-color: #e0e0e0;
        }

        .small-button {
            display: inline-block;
            background-color: #f4f4f4;
            color: #333;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 25px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
        }

        .small-button:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    

    <!-- Main content -->
    <h1>Welcome, <?php if (isset($name)) { echo $name; } ?> !</h1>
 

    <a href="myorders.php" class="big-button">My Orders</a>
    <a href="myaccount.php" class="big-button">My Account</a>
    <a href="logout.php" class="small-button">↻</a>


    
</body>
</html>   
