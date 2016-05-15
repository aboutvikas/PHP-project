<?php session_start(); ?>


<?php 

        $_SESSION['check_user'] = null; 
        $_SESSION['last_name'] = null;
        $_SESSION['father_name'] = null;
        $_SESSION['roll_no'] = null;
        $_SESSION['course'] = null;
        $_SESSION['email'] = null;
        $_SESSION['gender'] = null;
        $_SESSION['city'] = null;
        $_SESSION['mobile'] = null;

header("Location: index.php");

?>