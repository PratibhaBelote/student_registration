 <?php
	include('config/config.php');
	 $sql = " SELECT * from student WHERE student_id='".$_SESSION['student_id']."'"; 
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	
	$dob_arr =  explode('-',$row['dob']);
	$hobbies_arr =  explode(',',$row['hobbies']);
	//echo '<pre>'; print_r($hobbies_arr); echo '</pre>';			
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome, <?php echo $_SESSION['student_name']?></title>
<link rel="stylesheet" href="main.css">
</head>
<body>
<section class="container">
<div class="login-container">
<h2><?php include('error.msg.php');?></h2>    
<h2><a href="<?php echo CONFIG_PATH;?>logout.php">Logout</a></h2>
    <h2>Welcome, <b><?php echo $_SESSION['student_name']?></b></h2>

    <div class="form-box">
        <form action="query.php" method="post">
            <div class="form-group">
                <label for="studentName">Student name</label>
                <input type="text" id="studentName" name="student_name" placeholder="Enter student name" required value="<?php echo $row['student_name'];?>">
            </div>
            <div class="form-group">
                <label for="studentAddress">Student address</label>
                <input type="text" id="studentAddress" name="student_address" placeholder="Enter student address" required value="<?php echo $row['student_address'];?>">
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <div class="dob-select">
                    <?php $month = array('01'=>'January','02'=>'February','03'=>'March','04'=>'April','05'=>'May','06'=>'June','07'=>'July','08'=>'August','09'=>'Saptember','10'=>'October','11'=>'November','12'=>'December');?>
                    <select id="month" name="month" required>
                        <option value="">Month</option>
                        <?php foreach($month AS $key=>$val){?>
                            <option value="<?php echo $key;?>" <?php if($dob_arr[0]==$key){ echo 'selected="selected"'; }?>><?php echo $val;?></option>
                        <?php }?>
                    </select>
                    <select id="day" name="day" required>
                        <option value="">Day</option>
                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?php echo $i;?>" <?php if($dob_arr[1]==$i){ echo 'selected="selected"'; }?>><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                    <select id="year" name="year" required>
                        <option value="">Year</option>
                        <?php for ($i = 2001; $i <= 2050; $i++) { ?>
                            <option value="<?php echo $i; ?>" <?php if($dob_arr[2]==$i){ echo 'selected="selected"'; }?>><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="Gender">Gender</label>
                <div class="radio-container">
                    <label><input type="radio" name="gender" value="male" <?php if($row['gender']=='male'){ echo 'checked="checked"'; }?>> Male</label>
                    <label><input type="radio" name="gender" value="female" <?php if($row['gender']=='female'){ echo 'checked="checked"'; }?>> Female</label>
                    <label><input type="radio" name="gender" value="Other" <?php if($row['gender']=='Other'){ echo 'checked="checked"'; }?>> Other</label>
                </div>
            </div>
			
			<div class="form-group">
                <label for="hobbies">Hobbies</label>
                <div class="checkbox-container">
                    <label><input type="checkbox" name="hobbies[]" <?php if(in_array('Swimming',$hobbies_arr)){ echo 'checked="checked"';}?> value="Swimming">Swimming</label>
                    <label><input type="checkbox" name="hobbies[]" <?php if(in_array('Reading',$hobbies_arr)){ echo 'checked="checked"';}?> value="Reading"> Reading</label>
                    <label><input type="checkbox" name="hobbies[]" <?php if(in_array('Traveling',$hobbies_arr)){ echo 'checked="checked"';}?> value="Traveling"> Traveling</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" >
				<input type="hidden" id="password" name="old_password" value="<?php echo $row['password'];?>">
				<input type="hidden" name="student_id" value="  <?php echo $row['student_id'];?>">
                <input type="hidden" id="hidden" name="action" value="update_register"/> 
            </div>
            <div class="form-group">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
</section>
</body>
</html>


