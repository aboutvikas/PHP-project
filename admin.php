<?php session_start(); 

include("login.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome To RSMT</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" media="screen" href="css/responsive.css">
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
<!--
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
                    <li class="active"><a href="index.php">Home</a></li>
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
-->
</header>
<!-----------------------  /header --------------->

<section>
    <div class="container">
        <div class="admin-heading col-1">
            <h2>Welcome Administrator</h2>
            <p>What would you like to do today?</p>
        </div>
        
        <div class="admin-content col-1">
            <form class="admin-option" method="post">
                <input type="submit" name="admin-std" value="View Students">
                <input type="submit" name="admin-attend" value="View Attendence">
                <a href="attend.php">Enter Attendence</a>
            </form>
        </div>
    </div>
    
<?php if(isset($_POST['admin-attend'])) { ?>    
    <div class="container admin-table">
        <div class="admin-attend">
           <h2 style="text-align:center;">Attendence</h2>
            <table align="center">
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Semester</th>
                    <th>Subject Name</th>
                    <th>Attendence</th>
                    <th>Total Class</th>
                    <th>Month</th>
                </tr>
                
                <?php 
                    
                include("connection.php");
                $query =" SELECT * FROM std_attend ";
                $select_query = mysqli_query($connection,$query);
                
                if(!$select_query){
                            die('Query Failed'.mysqli_error($connection));
                }
                
                while($row = mysqli_fetch_array($select_query)) {
                                
                    $id =$row['id'];
                    $roll_no =$row['roll_no'];
                    $name =$row['name'];
                    $course =$row['course'];
                    $semester = $row['semester'];
                    $subject = $row['subject'];
                    $attendence = $row['attendence'];
                    $total_class = $row['total_class'];
                    $month = $row['month'];
                ?>
                <tr>
                    <td><?php echo $roll_no; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $course; ?></td>
                    <td><?php echo $semester; ?></td>
                    <td><?php echo $subject; ?></td>
                    <td><?php echo $attendence; ?></td>
                    <td><?php echo $total_class; ?></td>
                    <td><?php echo $month; ?></td>
                </tr>
                
                <?php } ?>
                <?php mysqli_close($connection); ?>
                
            </table>    
        </div>
    </div>
<?php } ?>


   
<?php if(isset($_POST['admin-std'])) { ?>    
    <div class="container admin-table">
        <div class="admin-std">
           <h2 style="text-align:center;">Students</h2>
            <table align="center">
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>City</th>
<!--                    <th>Password</th>-->
                    <th>Mobile</th>
                    <th>Delete Student</th>
                </tr>
                
                <?php 
                    
                include("connection.php");
                $query =" SELECT * FROM students ";
                $select_query = mysqli_query($connection,$query);
                
                if(!$select_query){
                            die('Query Failed'.mysqli_error($connection));
                }
                
                while($row = mysqli_fetch_array($select_query)) {
                                
                    $id =$row['id'];
                    $roll_no =$row['roll_no'];
                    $first_name =$row['first_name'];
                    $last_name =$row['last_name'];
                    $name = $first_name ." ". $last_name ;
                    $father_name =$row['father_name'];
                    $course =$row['course'];
                    $email = $row['email'];
                    $gender = $row['gender'];
                    $city = $row['city'];
//                    $pass = $row['password'];
                    $mobile = $row['mobile'];
                ?>
                <tr>
                    <td><?php echo $roll_no; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $father_name; ?></td>
                    <td><?php echo $course; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $city; ?></td>
<!--                    <td><?php echo $pass; ?></td>-->
                    <td><?php echo $mobile; ?></td>
                    <td><a href="admin.php?delete=<?php echo $id?>"><button onclick="del_btn()">Delete</button></a></td>
                </tr>
                <script>
                    function del_btn(){
                        confirm ("Are you sure that you want to permanently delete this user");
                    }
                </script>
                
                <?php } 
                      mysqli_close($connection);
                ?>
                
            </table> 
            
        </div>
    </div>
<?php } ?>    
</section>
<?php //delete query for user delete
    if(isset($_GET['delete'])){
    include("connection.php");
        
    $user_id = $_GET['delete'];
                  
    $query =" DELETE FROM students WHERE id='$user_id' ";
    $delete_query = mysqli_query($connection,$query);
    mysqli_close($connection);
    }
?>   
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