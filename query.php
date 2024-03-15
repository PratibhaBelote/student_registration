 <?php
    include('config/config.php');
    echo '<pre>'; print_r($_POST); echo '</pre>';//die;
    if(isset($_POST['action']) && $_POST['action']=='Register'){
        $student_name = $_POST['student_name'];
        $student_address = $_POST['student_address'];
        $hobbies = @implode(',',$_POST['hobbies']);
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $dob = $month.'-'.$day.'-'.$year;
        $add_date = date('Y-m-d H:i:s');
        
        echo $sql = " INSERT INTO student  SET student_name='".$student_name."',student_address='".$student_address."',dob='".$dob."',hobbies='".$hobbies."',gender='".$gender."',password='".$password."',add_date='".$add_date."'"; 
        //die;
        if (mysqli_query($conn, $sql)) {
            echo "Create successfully ";
            header("location:student_listing.php");
            exit();
        } else {
            echo "Error creating table: " . mysqli_error($conn);
            header("location:student_listing.php");
            exit();
        }
       
    }    
    
    // Delete operation
    if(isset($_GET['action']) && $_GET['action']=='delete_registration'){
        echo $sql = " DELETE FROM student WHERE student_id='".$_GET['student_id']."'"; 
       //die;
        if (mysqli_query($conn, $sql)) {
            echo "Delete successfully ";
            header("location:student_listing.php");
            exit();
        } else {
            echo "Error creating table: " . mysqli_error($conn);
            header("location:student_listing.php");
            exit();
        }
    }
	
    //UPDATE OPERAATION
	if(isset($_POST['action']) && $_POST['action']=='update_register'){
        $student_id = $_POST['student_id'];
		$student_name = $_POST['student_name'];
        $student_address = $_POST['student_address'];
        $hobbies = @implode(',',$_POST['hobbies']);
        $gender = $_POST['gender'];
		if($_POST['password']!='' && $_POST['password']!=null){
			$password = $_POST['password'];
		}else{
			$password = $_POST['old_password'];
		}
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $dob = $month.'-'.$day.'-'.$year;
        $update_date = date('Y-m-d H:i:s');
        
        echo $sql = " UPDATE student SET student_name='".$student_name."',student_address='".$student_address."',dob='".$dob."',hobbies='".$hobbies."',gender='".$gender."',password='".$password."',update_date='".$update_date."' WHERE student_id='".$student_id."'"; 
        //die;
        if (mysqli_query($conn, $sql)) {
            echo "Update successfully ";
            header("location:student_listing.php");
            exit();
        } else {
            echo "Error creating table: " . mysqli_error($conn);
            header("location:student_listing.php");
            exit();
        }
    }  

    // login operation
    if(isset($_POST['action']) && $_POST['action']=='login_action'){
        echo $sql = " SELECT * FROM student WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
        
        $chkrow = mysqli_num_rows($conn->query($sql));
        $row = mysqli_fetch_assoc($conn->query($sql));
        //echo '<pre>'; print_r($chkrow); echo '</pre>'; die;
        if ($chkrow>0) {
            $_SESSION['student_id'] = $row['student_id'];
            $_SESSION['student_name'] = $row['student_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['student_address'] = $row['student_address'];
            $_SESSION["SUCCESS_MSG"]='Login successfully';
            header("location:my_profile.php");
            exit();
        } else {
            $_SESSION["ERROR_MSG"]='Wrong username or Password';
            header("location:index.php");
            exit();
        }
    }
    
    // Close the database connection
    mysqli_close($conn);

?>



