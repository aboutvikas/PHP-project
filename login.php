<?php

if (isset($_POST['login']) == "Submit" ){
    include("connection.php");
    
    $email =$_POST['email'];
    $pass =$_POST['pass'];
    
    $email = mysqli_real_escape_string($connection,$email);
    $pass = mysqli_real_escape_string($connection,$pass);
    
    // encriptin password to verify password
    
    //  $pass = md5(md5("i am adding some letters to password".$pass));
    
    $query = "SELECT * FROM students WHERE email = '{$email}' ";
    $select_query =  mysqli_query($connection,$query);
    
    if(!$select_query) {
        die("Query Failed !!".mysqli_error($connection));
    }
    
    
    $db_email="";
        
        $row = mysqli_fetch_array($select_query);
        //print_r ($row);
    
        $db_id =$row['id'];
        $db_first_name =$row['first_name'];
        $db_last_name =$row['last_name'];
        $db_father_name =$row['father_name'];
        $db_roll_no =$row['roll_no'];
        $db_course =$row['course'];
        $db_email =$row['email'];
        $db_password =$row['password'];
        $db_gender =$row['gender'];
        $db_city =$row['city'];
        $db_mobile =$row['mobile'];
    

    if ($email === $db_email && $pass === $db_password ) {
        
        $_SESSION['check_user']= $db_id;
        
        $_SESSION['first_name']= $db_first_name;
        $_SESSION['last_name']= $db_last_name;
        $_SESSION['father_name']= $db_father_name;
        $_SESSION['roll_no']= $db_roll_no;
        $_SESSION['course']= $db_course;
        $_SESSION['email']= $db_email;
        $_SESSION['gender']= $db_gender;
        $_SESSION['city']= $db_city;
        $_SESSION['mobile']= $db_mobile;
        
        header("Location:student.php");
        
    } else if ($email != $db_email) {
        $login_error = "Email address not found in our database.Please check your email address.";
    }
    
    else {
        $login_error = "The e-mail address or password you entered was incorrect.";
    }
} else {
    $login_error = "";
    
}

?>