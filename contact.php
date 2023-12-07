

<?php
session_start();

include('includes/dbconnection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];



if( (isset($_POST['name'])) && (isset($_POST['email'])) && isset($_POST['subject']) && isset($_POST['message']))
{

    $query = "INSERT  INTO contact (name,email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if(mysqli_query($db,$query))

    echo "<h2>Your Message has been sent. Thanks for contacting us, $name <h2>";
    
    else 
        echo "Error: " .mysqli_error($db);
    

}

?>

<html>
<head>

</head>
<body>
    <br>
    <a href="index.php">Go to Home</a>
</body>

</html>




   
  
