<?php
try {
    $db = mysqli_connect("localhost","_username","_password","pastrydb",3325);
    if (mysqli_connect_errno()) {
        throw new Exception(mysqli_connect_error());
    }
} catch (Exception $e) {
    exit("Error: " . $e->getMessage());
}
?>