 <?php 
  include('config/config.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Login</title>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

    <div class="container">
    <h2>Student List</h2>
    <p>Full information of all student</p>            
    <table class="table table-striped">
        <thead>
            <tr>
            <th>Sr. No.</th>
                <th>Student Name</th>
                <th>DOB</th>
                <th>Address</th>
                <th>Status</th>
                <th>Add Date</th>  
                <th>Action</th>  
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = " SELECT * from student "; 
            $result = $conn->query($sql);
            $i=1;
            while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
            <td><?php echo $i;?></td>    
                <td><?php echo $row['student_name'];?></td>
                <td><?php echo $row['dob'];?></td>
                <td><?php echo $row['student_address'];?></td>
                <td><?php 
				
				if($row['status']==1){?>
					<a href="#"><?php echo 'Active';?></a>
				<?php }else{ ?>
				
				<a href="#"><?php echo 'In-Active';?></a>
				<?php } ?>
				
				</td>
                <td><?php echo date ('d-m-Y',strtotime($row['add_date']));?></td>  
                <td><a href="query.php?action=delete_registration&student_id=<?php echo $row['student_id'];?>">Delete</a>&nbsp;&nbsp;
                <a href="edit_registration.php?action=edit_registration&student_id=<?php echo $row['student_id'];?>">Edit</a></td>     
            </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
    </div>            




</body>
</html>


