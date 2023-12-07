<?php

session_start();

include('../includes/dbconnection.php');

    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

   
    $query = "INSERT INTO user (name, username, password, email, address) VALUES ('$name', '$username', '$password', '$email', '$address')";
    if (mysqli_query($db, $query)) {
 
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

?>
