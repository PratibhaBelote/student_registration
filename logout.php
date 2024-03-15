 <?php
 session_start();
 session_destroy();
 session_start();
 $_SESSION['SUCCESS_MSG']='Logout successfully.';
 header("location:index.php");
 

?>



