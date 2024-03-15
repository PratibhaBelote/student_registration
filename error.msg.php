<?php
if(isset($_SESSION['SUCCESS_MSG']) && $_SESSION['SUCCESS_MSG']!=""){
    echo $_SESSION['SUCCESS_MSG'];
    $_SESSION['SUCCESS_MSG']='';
}

if(isset($_SESSION['ERROR_MSG']) && $_SESSION['ERROR_MSG']!=""){
    echo $_SESSION['ERROR_MSG'];
    $_SESSION['ERROR_MSG']='';
}


?>



