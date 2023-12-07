<?php

session_start();

include('../includes/dbconnection.php');


if(isset($_POST['username']))  {

  $username = $_POST['username'];
  $password = $_POST['password'];


  $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  $result = mysqli_query($db, $query);

  if (mysqli_num_rows($result) == 1) {
    
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
  } else {

    echo "Incorrect username or password";
  }
}

?>


<html>
<head>
  <meta charset="utf-8">
  <title>User Login - Pastry Retail</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px 0;
    }

    .login-form {
      background-color: #f4f4f4;
      padding: 20px;
      border-radius: 5px;
    }

    .login-form h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-control {
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      box-sizing: border-box;
    }

    .form-control[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    .form-control[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <div class="container">
    <form class="login-form" action="login.php" method="post">
      <h2>User Login</h2>
      <label for="username">Username:</label>
      <input class="form-control" type="text" id="username" name="username" required>
      
      <label for="password">Password:</label>
      <input class="form-control" type="password" id="password" name="password" required>
      
      <input class="form-control" type="submit" value="Login">
    </form>
  </div>
  <a href="registration.php">Register for New User</a>
  <script>
  document.getElementById('login-form').addEventListener('submit', function(e) {
  
  e.preventDefault();
  
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("result").innerHTML = this.responseText;
      }
  };
  
  var username = document.getElementById('username').value
  var password = document.getElementById('password').value
  
  xhr.open("POST", "login.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("username="+username+"&password="+password);
});

</script>


</body>
</html>