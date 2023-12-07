
<html>
    <body>
    <h1> Your Orders </h1>
    </body>
</html>
<?php
session_start();

include('../includes/dbconnection.php');
if (isset($_SESSION["username"])) {

    $username = $_SESSION["username"];
}

if (!isset($_SESSION['username'])) {
   
    header('Location: login.php');
    exit;
}


$query = "SELECT item, price,datee,id  FROM orders WHERE username='$username'" ;
    $result = mysqli_query($db, $query);

 
    if (mysqli_num_rows($result) > 0) {
        // Start the table
        echo "<table>";
        echo "<tr><th>Item</th><th>Price</th><th>Date</th></tr>";


        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["item"] . "</td><td>" . $row["price"] . "</td><td>" . $row["datee"] . "</td></tr>";
        }

        // End the table
        echo "</table>";
    } else {
        echo "0 results";
    }

 
?>

<html>
    <head>
        <style>
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

th {
    background-color: #4CAF50;
    color: white;
}

        </style>
    </head>
</html>