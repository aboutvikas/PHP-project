<?php session_start(); 

include("login.php");

?>

<?php 
if(isset($_POST['send'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    if ($name != NULL && $email != NULL && $subject != Null && $message != NULL) {
        
        include("connection.php");
        
        $query = "INSERT INTO user_contact (id,name,email,subject,message)";
        $query.= "VALUES ('', '$name', '$email', '$subject', '$message')" ;
        
        $select_query = mysqli_query($connection,$query);
        
        if (!$select_query) {
            die("Query FAILED!!".mysqli_error($connection));
        } else {
            echo '<script> alert("Your request has been submitted successfully"); </script>';
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome To RSMT</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" media="screen" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
</head>
<body>
    <!--   Header    -->
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
    <!----------------    Nav Bar    --------------------------->
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
                    <li class="active"><a href="contact.php">Contact</a></li>
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
<!-----------------------  /header --------------->

<!-------------------- Section ------------------------------------------>
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
    
    <div class="container">
        <div class="heading col-1">
            <div class="heading-location">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    <div class="container flex-col">   
        <div class="address col-3">
            <h2>Our Address</h2>
            <div>
                <p>Rajarshi School of Management & Technology<br>
                Udai Pratap College Campus<br>Varanasi-221002 UP,INDIA<br></p>
                <h3>Phone Number :</h3>
                <p>+91-542-2108316</p>
                <p>+91-542-2280641</p>
                <h3>Email :</h3>
                <p class="email"><a href="mailto:rsmt.ac.in@gmail.com">rsmt.ac.in@gmail.com</a></p>
                <p class="email"><a href="mailto:placementrsmt@gmail.com">placementrsmt@gmail.com</a></p>
            </div>
        </div>
        <div class="widget col-2">
            <h2>Contact Us</h2>
            <div class="contact-form">
                <form action="" method="post">
                    <input type="text" placeholder="Your Name" id="name" name="name" required>
                    <input type="text" placeholder="Your Email" id="email" name="email" required>
                    <input type="text" placeholder="Subject" id="subject" name="subject" required>
                    <textarea id="message" placeholder="Your Massage" cols="40" rows="3" name="message" required></textarea>
                    <input type="submit" id="send" value="Send" name="send">
                </form>
            </div>
        </div>
    </div>
</section>
<!--      Footer start here        -->
<footer>
        <div class="container">
            <div class="footer link">
                 <ul class="footer-left">
                <li style="border-right:none;">&copy; Copyright2016.   Designed by <a href="http:/google.com/+aboutvikas">Vikas Seth</a></li>
                <ul class="footer-right" style="float:right;">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Apply</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </ul>
            </div>
        </div>
    </footer>
</body>
</html>