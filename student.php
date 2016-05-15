
<?php session_start(); //echo $_SESSION['check_user']; ?>

        
<?php

        $fname = $_SESSION['first_name'];
        $lname = $_SESSION['last_name'];
        $father_name = $_SESSION['father_name'];
        $roll_no = $_SESSION['roll_no'];
        $course = $_SESSION['course'];
        $email = $_SESSION['email'];
        $gender = $_SESSION['gender'];
        $city = $_SESSION['city'];
        $mobile = $_SESSION['mobile'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome To RSMT</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/student.css">
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
                    
                    <?php if($_SESSION['check_user']){ ?> <li style="float:right;"><a href="logout.php">Logout</a></li>
                    
                    <?php }else{ ?>
                    <li style="float:right;"><a href="reg.php">Register</a></li>
                    <li style="float:right;"><a>Login</a>
                        <div class="login">
                            <form action="" method="post">
                                <input type="text" id="userid" name="email" placeholder="Email" required>
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
    <div class="container">
        <div class="stu-welcome col-1">
            <h2>Welcome <?php echo $fname; ?></h2>
        </div>
        <div class="stu-details col-1">
            <h3 align="center">Your Details</h3>
            <table align="center">
                <tr>
                    <td>Name</td><td><?php echo $fname.' '.$lname; ?></td>
                </tr>
                <tr>
                    <td>Father's Name</td><td><?php echo $father_name; ?></td>
                </tr>
                <tr>
                    <td>Roll No</td><td><?php echo $roll_no; ?></td>
                </tr>
                <tr>
                    <td>Couser</td><td><?php echo $course; ?></td>
                </tr>
                <tr>
                    <td>Email</td><td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>Gender</td><td><?php echo $gender; ?></td>
                </tr>
                <tr>
                    <td>City</td><td><?php echo $city; ?></td>
                </tr>
                <tr>
                    <td>Mobile No</td><td><?php echo $mobile; ?></td>
                </tr>
            </table>
        </div>
    </div>
</section>
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