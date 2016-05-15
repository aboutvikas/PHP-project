<?php 

if(isset($_GET['submit'])){
    
    $course = $_GET['course'] ;
    $semester = $_GET['semester'] ;
    $month= $_GET['month'] ;
    $sub_name = $_GET['sub_name'] ;
    $attend_input = $_GET['attend_input'] ;

    
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome To RSMT</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/attend.css">
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
</header>
<!--   /header -->
    <section>
        <div class="container">
            <div class="attend-heading col-1">
                <h2>Attendence Submition Page</h2>
            </div>
            <div class="attend-form col-1">
                <form action="" method="get" class="tt">
                    <select id="attend-course" name="course" required>
                         <option value="" selected hidden>Choose Course</option>
                         <option id="mca" value="MCA">MCA</option>
                         <option id="mba" value="MBA">MBA</option>
                         <option id="bba" value="BBA">BBA</option>
                         <option id="bca" value="BCA">BCA</option>
                     </select><br>

                     <select id="attend-sem" name="semester" required>
                         <option value="" selected hidden>Choose Semester</option>
                         <option id="I" value="I">I</option>
                         <option id="II" value="II">II</option>
                         <option id="III" value="III">III</option>
                         <option id="IV" value="IV">IV</option>
                     </select><br>

                  <select id="attend-month" name="month" required>
                        <option value="" selected hidden>Select Month</option>
                        <option value="Jan" id="jan">January</option>
                        <option value="Feb" id="feb">February</option>
                        <option value="Mar" id="mar">March</option>
                        <option value="Apr" id="apr">April</option>
                        <option value="May" id="may">May</option>
                        <option value="Jun" id="jun">June</option>
                        <option value="Jul" id="jul">July</option>
                        <option value="Aug" id="aug">August</option>
                        <option value="Sep" id="sep">September</option>
                        <option value="Oct" id="oct">October</option>
                        <option value="Nov" id="nov">November</option>
                        <option value="Dec" id="dec">December</option>
                  </select><br>
                    <select id="sub-name" name="sub_name" required>
                         <option value="" selected hidden>Choose Subject</option>
                         <option value="Management Information Systems">Management Information Systems</option>
                         <option value="Web Technology">Web Technology</option>
                         <option value="Artificial Intelligence">Artificial Intelligence</option>
                         <option value="Mobile Computing">Mobile Computing</option>
                         <option value="Client Server Computing">Client Server Computing</option>
                     </select><br>
                    <input type="number" id="attend_input" name="attend_input" placeholder="Enter total attended classes in this month" maxlength="2" required onKeyDown="if(this.value.length==2 && event.keyCode!=8) return false;"><br>
                    <input type="submit" value="Submit" name="submit" id="attend-submit">
                </form>
            </div>
        </div>
             
    <?php if(isset($_GET['submit'])) { ?> <!-- Hidding Student Div until user select it -->
        <div class="container">
            <div class="stu-details col-1">
                <h2>Students Details</h2>
                <form method="post" class="attend-save">
                 
                 <table align="center">
                 
                 <tr>
                    <th>Roll No</th><th>Name</th><th>Course</th><th>Semester</th><th>Attendence</th><th>Month</th>
                 </tr>
                 
                <?php
                        
                    if(!empty($course) && !empty($semester) && !empty($month) && !empty($sub_name) && !empty($attend_input) ){
                        
                        include ("connection.php");

                        $query = " SELECT * FROM students WHERE course='{$course}' " ;
                        $select_query = mysqli_query($connection, $query);

                        if(!$select_query){
                            die('Query Failed'.mysqli_error($connection));
                        }
                        $a=1; // veriable for making chanable input tag name.
                        
                        while($row = mysqli_fetch_array($select_query)) {
                                
                            $db_id =$row['id'];
                            $db_roll_no =$row['roll_no'];
                            $db_first_name =$row['first_name'];
                            $db_last_name =$row['last_name'];
                            $db_course =$row['course'];
                            $db_name = $db_first_name ." ". $db_last_name ;
                ?>
                        <tr>
                            <td><?php echo $db_roll_no; ?> </td>
                            <td><?php echo $db_name; ?></td>
                            <td><?php echo $db_course; ?></td>
                            <td><?php echo $semester; ?></td>
                            <td><input type="number" name="<?php echo $a; $a++; ?>" placeholder="max (<?php echo $attend_input;?>)" maxlength="2" required></td>
                            <td><?php echo $month; ?></td>
                        </tr>
                        
                        <?php } //while loop closing  ?> 

                        <?php mysqli_close($connection); } ?>
                        
                    </table>
                    <input type="submit" name="attend_save" id="save_id" value="Submit Details" >
                    
                </form>
                 
                   
                <?php 
                
                if(isset($_POST['attend_save'])) {
                            
                 if(!empty($course) && !empty($semester) && !empty($month) && !empty($sub_name) && !empty($attend_input) ){
       
                    include ("connection.php");

                    $query = " SELECT * FROM students WHERE course='{$course}' " ;
                    $select_query = mysqli_query($connection, $query);

                    if(!$select_query){
                        die('Query Failed'.mysqli_error($connection));
                    }
                            
                    $a=1;
                                
                    while($row = mysqli_fetch_array($select_query)) {   
                     $attendence = $_POST[$a];
                     $db_roll_no =$row['roll_no'];
                     $db_first_name =$row['first_name'];
                     $db_last_name =$row['last_name'];
                     $db_course =$row['course'];
                     $db_name = $db_first_name ." ". $db_last_name ;
                                
                     $query2 = "INSERT INTO std_attend (id,roll_no,name,course,semester,subject,attendence,total_class,month )";
                     $query2.= "VALUES ('','$db_roll_no','$db_name','$db_course','$semester','$sub_name','$attendence','$attend_input','$month') ";
                                
                     $select_query2 = mysqli_query($connection, $query2);
                     $a++;
                        
                    }
                     echo '<script>'; 
                     echo 'window.location.href = "attend.php";';
                     echo 'alert("Data has been Submitted Successfully.");'; 
                     echo '</script>';
                  }
                }
            
                ?>   
            </div>
        </div>
        
    <?php } //Hidding Student Form ?>
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