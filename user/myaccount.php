
<html>
<body>
<h1> Account details </h1>
</body>
</html>


<?php

session_start();
// error_reporting(0);
include('../includes/dbconnection.php');

if (isset($_SESSION["username"])) {
// Get the current logged-in username
$username = $_SESSION["username"];
}


if (!isset($_SESSION['username'])) {

    header('Location: login.php');
    exit;
}


if (isset($_POST['address']) || (isset($_POST['new_password']) && isset($_POST['confirm_password']))) {

    if (isset($_POST['address'])) {
        $query = "UPDATE user SET address='" . $_POST['address'] . "' WHERE username='" . $_SESSION['username'] . "'";
        mysqli_query($db, $query);
    }

    if (isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
        if ($_POST['new_password'] == $_POST['confirm_password']) {
            $query = "UPDATE user SET password='" . $_POST['new_password'] . "' WHERE username='" . $_SESSION['username'] . "'";
            mysqli_query($db, $query);
        } else {
            echo "Error: The new password and confirm password do not match.";
        }
    }
}


$query = "SELECT name, username, password, email, address FROM user WHERE username='" . $_SESSION['username'] . "'";
$result = mysqli_query($db, $query);
$user = mysqli_fetch_assoc($result);
?>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    .form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .form h2 {
        margin: 0 0 20px 0;
        text-align: center;
    }

    .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .form-group label {
        flex: 1;
        font-size: 18px;
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
        flex: 2;
        font-size: 18px;
        padding: 5px;
    }

    .form-group input[type="submit"] {
        font-size: 18px;
        padding: 10px 20px;
    }
</style>

<div class="form">
    <h2><?php echo $user['name']; ?></h2>
    <form method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" value="<?php echo $user['username']; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" id="password" value="<?php echo str_repeat('•', strlen($user['password'])); ?>" disabled>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" value="<?php echo $user['email']; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="<?php echo $user['address']; ?>">
        </div>
        <div class="form-group">
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" id="new_password">
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" id="confirm_password">
        </div>
        <div class="form-group">
            <input type="submit" value="Update">
        </div>
    </form>
</div>

