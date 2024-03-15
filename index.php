<?php include('config/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Login</title>
<link rel="stylesheet" href="main.css">
</head>
<script>
  function validateForm() {
    var studentName = document.getElementById("studentName").value.trim();
    var studentAddress = document.getElementById("studentAddress").value.trim();
    var password = document.getElementById("password").value.trim();

    if (studentName === "") {
      alert("Please enter student name.");
      return false;
    }

    if (studentAddress === "") {
      alert("Please enter student address.");
      return false;
    }

    if (password === "") {
      alert("Please enter your password.");
      return false;
    }

    return true; // Form submission allowed if all fields are filled
  }
</script>
<body>
<section class="container">
<div class="login-container">
    <h2>Student Login</h2>
    <h2><?php include('error.msg.php');?></h2>
    <div class="form-box">
        <form action="query.php" method="post">
            <div class="form-group">
                <label for="studentName">Username</label>
                <input type="text" id="email" name="email" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="studentAddress">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>
            
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="form-group">
                <a href="registration.php"><button type="button">Create Account</button></a>
            </div>
            <input type="hidden" name="action" value="login_action"/> 
            
        </form>
    </div>
</div>
</section>
</body>
</html>






