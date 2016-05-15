<?php session_start(); ?>
    
<?php

    if(isset($_POST['submit']) == "Registers") {
        $error="";
        $success_msg="";
        $fname  = $_POST['fname'];
        $lname = $_POST['lname'];
        $father_name = $_POST['father_name'];
        $roll_no = $_POST['roll_no'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        $pass = $_POST['pw'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $mobile = $_POST['mobile'];
        $cpass= $_POST['cpw'];
        
        if ($_POST['father_name'] == null) {
            
            $father_name = "Not filled by user";
        }
        
        if ($pass !== $cpass){
            $error.="'Password' and 'Confirm Password' doesn't match.<br>";
        }
        if (strlen($pass)<8){
            $error.="Please enter password at least 8 characters.<br>";
        }
        // encrypting password
        
        //   $pass = md5(md5("i am adding some letters to password".$pass));
        
        
        if (!$error){
            
            include('connection.php');
            $query ="SELECT * FROM students WHERE email='".mysqli_real_escape_string($connection,$_POST['email'])."'";
            $result=mysqli_query($connection,$query);
            
            $results=mysqli_num_rows($result);
        
            if($results){
                $error.="Email address already exist. <br>";
            } else {
                $query ="INSERT INTO students (id,first_name,last_name,father_name,roll_no,course,email,password,gender,city,mobile) "; 
                $query.="VALUES ('','$fname','$lname','$father_name','$roll_no','$course','$email','$pass','$gender','$city','$mobile')";

                $query_check=mysqli_query($connection, $query);
                if(!$query_check){
                    die('Query Failed'.mysqli_error($connection));
                }

                $success_msg="You have successfully registered";

            }
            
            mysqli_close($connection);
        }

    } else{
        $error="";
        $success_msg="";
    }


include ("login.php");


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome To RSMT</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/reg.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
</head>
<body>
    <!-------------------------  Header -------------------->
     <header>
    <div class="container">
         <div class="header-left col-3" style="float:left;">
             <p><span style="font-weight:bold;">Call : </span>+91 542-2108316</p>
             <p class="link"><span style="font-weight:bold;">Email : </span><a href="mailto:mrvikas.seth@gmail.com">rsmt.ac.in@gmail.com</a></p>
            </div> 
            <div class="home col-3" style="padding-left:0%; float:left;">
               <a href="index.php"><img src="img/logo.png" width="100px" height="100px"></a>
           </div>
           <div class="header-right col-3 link" style="float:right;">                  
                <ul style="padding-bottom:4%;">
                   <li><a href="">AboutUs</a></li>
                   <li><a href="contact.php">Contact</a></li>
                   <li><a href="">Apply Now</a></li>
               </ul>
               <form class="search" name="search" method="get" action="#">
                   <input type="text" name="search" id="search" placeholder="Search the Site.." size="25px">
               </form>
            </div>
            <div class="clearfix"></div>
    </div>
    <!--------------------------    Nav Bar   ----------------------------------------->
    <div class="container">
         <nav>
            <div class="nav-menu">
                <label for="nav-button" class="nav-button">
                    <span><a href="index.php" style="float:left;">RSMT</a></span>
                    <span style="float:right; font-size:1.2em;">&#9776;</a></span>
                    <div class="clearfix"></div>
                </label>
                <input type="checkbox" id="nav-button" role="button">
                <ul class="nav-left" id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <a>Course &#9662;</a>
                        <ul class="hidden">
                            <li><a href="#">MCA</a></li>
                            <li><a href="#">MBA</a></li>
                            <li><a href="#">BCA</a></li>
                            <li><a href="#">BBA</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Facilities &#9662;</a>
                        <ul class="hidden">
                            <li><a href="#">Computer Lab</a></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">Sport</a></li>
                            <li><a href="#">Hostel</a></li>
                            <li><a href="#">Cafetaria</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                    <li>
                        <a>About Us &#9662;</a>
                        <ul class="hidden">
                            <li><a href="#">Vision & Mission</a></li>
                            <li><a href="#">President's Message</a></li>
                            <li><a href="#">Varanasi City</a></li>
                            <li><a href="#">Chairman's Message</a></li>
                            <li><a href="#">Publications</a></li>
                        </ul>
                    </li>
                   <?php if(isset($_SESSION['check_user'])){ ?> 
                       <li style="float:right;"><a href="logout.php">Logout</a></li>
                       
                       <li style="float:right;"><a href="student.php"><?php echo $_SESSION['first_name']; ?></a></li>
                    
                    <?php }else{ ?>
                    <li style="float:right;"><a href="reg.php">Register</a></li>
                    <li style="float:right;"><a>Login</a>
                        <div class="login">
                            <form action="" method="post">
                                <input type="email" id="userid" name="email" placeholder="Email" required>
                                <input type="password" id="pass" name="pass" placeholder="Password" required>
                                <a href="">Forgotten your password?</a>
                                <input type="submit" name="login" id="submit" class="login-btn" value="Submit">
                            </form>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>      
    </header>
    <section>
        <?php if($login_error) { ?>
        <div class="container">
            <div class="login-error col-1">
                <div class="error">
                    <?php echo $login_error;  ?>
                </div>
            </div>
        </div>
        <?php } ?>
              
        <div class="container flex-col">
            <div class="reg-heading col-4">
                <h2>Why Should I Register ?</h2><hr>
                <ul>
                    <li>To Submit Application Form Online</li>
                    <li>To Make Fee Payment Online</li>
                    <li>To Check Your Submmited Details</li>
                    <li>To Get Ricept & Notifications</li>
                    <li>To Check Attendance Details</li>
                    <li>To Check Internal Exam Result</li>
                </ul>
                <h2>Need Help ?</h2><hr>
               <ul class="reg-contact">
                   <li><b>Call Us :</b> +91 542-2108316</li>
                   <li><b>Email Us :</b><a href="mailto:rsmat.ac.in@gmail.com"> rsmt.ac.in@gmail.com</a></li>
               </ul>
            </div>
            <div class="reg col-5">
               <?php if($error) echo '<div class="error"> <p style="margin:0;">'.$error.'</p></div>';  ?>
               <?php if ($success_msg) echo '<div class="success">'.$success_msg.'</div>' ; ?>
               <h3>New Student Registration</h3>
                <form name="register" action="reg.php" method="post">
                    <input type="text" name="fname" id="fname" placeholder="First Name" required>
                    <input type="text" name="lname" id="lname" placeholder="Last Name">
                    <input type="text" name="father_name" id="father_name" placeholder="Father's Name">
                    <input type="number" name="roll_no" id="roll_no" placeholder="AKTU Roll No" required>
                    <select required name="course">
                        <option value="" disabled selected hidden><span class="doo">Course</span></option>
                        <option value="MCA">MCA</option>
                        <option value="MBA">MBA</option>
                        <option value="BCA">BCA</option>
                        <option value="BBA">BBA</option>
                    </select>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="password" name="pw" id="pw" placeholder="Password" required>
                    <input type="password" name="cpw" id="cpw" placeholder="Confirm Password" required>
                    <select required name="gender">
                        <option class="do" value="" hidden="hidden" disabled selected>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <input type="text" name="city" id="city" placeholder="City">
                    <input type="number" name="mobile" id="mobile" placeholder="Mobile Number" maxlength="10">
                    <input type="checkbox" name="term" id="term" class="checkbox" required>
                    <label for="term">I have read and agree to the Terms.</label>
                    <input type="submit" name="submit" id="submit" value="Register">
                </form>
            </div>
        </div>
    </section>
    <!------------------ Footer ------------------------>
    <footer>
        <div class="container">
            <div class="footer link">
                 <ul class="footer-left">
                <li style="border-right:none;">&copy; Copyright2016.   Designed by <a href="http:/google.com/+aboutvikas">Vikas Seth</a></li>
                <ul class="footer-right" style="float:right;">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Apply</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </ul>
            </div>
        </div>
    </footer>
</body>
</html>