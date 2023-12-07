<?php
// Start the session
session_start();

include('../includes/dbconnection.php');


$_SESSION = array();

session_destroy();
?>

<script>

    alert("You have successfully logged out.");


    window.location.href = "../index.php";
</script>




