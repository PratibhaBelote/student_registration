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
    <h2>Student Registration</h2>
    <div class="form-box">
        <form action="query.php" method="post">
            <div class="form-group">
                <label for="studentName">Student name</label>
                <input type="text" id="studentName" name="student_name" placeholder="Enter student name" required>
            </div>
            <div class="form-group">
                <label for="studentAddress">Student address</label>
                <input type="text" id="studentAddress" name="student_address" placeholder="Enter student address" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <div class="dob-select">
                    <?php $month = array('01'=>'January','02'=>'February','03'=>'March','04'=>'April','05'=>'May','06'=>'June','07'=>'July','08'=>'August','09'=>'Saptember','10'=>'October','11'=>'November','12'=>'December');?>
                    <select id="month" name="month" required>
                        <option value="">Month</option>
                        <?php foreach($month AS $key=>$val){?>
                            <option value="<?php echo $key;?>"><?php echo $val;?></option>
                        <?php }?>
                    </select>
                    <select id="day" name="day" required>
                        <option value="">Day</option>
                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?php echo sprintf("%02d", $i); ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                    <select id="year" name="year" required>
                        <option value="">Year</option>
                        <?php for ($i = 2001; $i <= 2050; $i++) { ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="Gender">Gender</label>
                <div class="radio-container">
                    <label><input type="radio" name="gender" value="male"> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                    <label><input type="radio" name="gender" value="Other"> Other</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="hobbies">Hobbies</label>
                <div class="checkbox-container">
                    <label><input type="checkbox" name="hobbies[]" value="Swimming">Swimming</label>
                    <label><input type="checkbox" name="hobbies[]" value="Reading"> Reading</label>
                    <label><input type="checkbox" name="hobbies[]" value="Traveling"> Traveling</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <input type="hidden" id="hidden" name="action" value="Register"/> 
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</div>
</section>
</body>
</html>


