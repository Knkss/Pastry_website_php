<?php
session_start();
// error_reporting(0);
include('../includes/dbconnection.php');
// include('../includes/header.php');


if (!isset($_SESSION['username'])) {
 
    header('Location: login.php');
    exit;
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
        table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    
    </style>
</head>
<body>
    

<?php


$messages = mysqli_query($db, "SELECT * FROM contact");
?>






<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($messages)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['message']; ?></td>
        </tr>
    <?php } ?>
</table>


    
</body>
</html>   
