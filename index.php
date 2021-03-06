<?php session_start(); 

include("login.php");


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome To RSMT</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" media="screen" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
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
<!-----------------------  /header --------------->
    <section>
        <?php if($login_error) { ?>
        <div class="container" id="error_div">
            <div class="login-error col-1">
                <div class="error">
                    <?php echo $login_error;  ?> 
                    <a href="" class="error_close" onclick="document.getElementById('error_div').style.display='none';return false;">x</a>
                </div>
            </div>
        </div>
        <?php } ?>
              
        <div class="container">
            <div class="row flex-col clearfix">
                <div class="gallery col-2">
                    <img src="img/1.jpg" class="gal-img" id="gal_img" />
                    <img src="img/2.jpg" class="gal-img" id="gal_img" />
                    <img src="img/3.jpg" class="gal-img" id="gal_img" />
                </div>
                
<!------------------- Latest News ----------------->
                
                <div class="latest-news col-3">
                    <div class="news-heading">  
                        <h4>LATEST NEWS</h4><hr>
                    </div>
                    <div class="news">
                        <div class="news-calender clearfix">
                            <span class="month">Jan</span>
                            <span class="date">03</span>
                        </div>
                        <div>
                            <p>BCA/BBA Entrance Examination Result 2015-16</p>
                        </div>
                    </div>
                    <div class="news">
                        <div class="news-calender clearfix">
                            <span class="month">Feb</span>
                            <span class="date">19</span>
                        </div>
                        <div>
                            <p>MCA/MBA Entrance Examination Result 2015-16</p>
                        </div>
                    </div>
                    <div class="news">
                        <div class="news-calender clearfix">
                            <span class="month">Jul</span>
                            <span class="date">10</span>
                        </div>
                        <div>
                            <p>Udai Pratap Inter College Entrance Examination Result</p>
                        </div>
                    </div>
                    <div class="news">
                        <div class="news-calender clearfix">
                            <span class="month">Aug</span>
                            <span class="date">14</span>
                        </div>
                        <div>
                            <p>Regarding Dates of UPSEE 2016 Exam.More details on AKTU</p>
                        </div>
                    </div>
                    <div class="news">
                        <div class="news-calender clearfix">
                            <span class="month">Sep</span>
                            <span class="date">30</span>
                        </div>
                        <div>
                            <p>BCA/BBA Entrance Examination Result 2015-16</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row clearfix">
             <div class="col-2">
             
<!---------------------  Welcome Message  ------------------------>
                <div class="widget-item">
                    <h2>Welcome to RSMT</h2>
                    <p>
                        Rajarshi School of Management & Technology is a leading technology institute offering under-graduate and post-graduate programmes in Computer Application and Management. 
                    </p>
                    <p>
                        Globally there is a turning towards India for guidance with the realization that a clinically scientific approach even when softened by application of human psychology, falls short of developing fully rounded human beings. Ancient Indian education methodologies nurtured each individual holistically simultaneously addressing aspects that can be measured, those that can be surmised, and intangibles that exist beyond the measureable. RSMT approach reflects this tradition, constantly striving for goals that surpass the predictable and logically achievable. This approach guarantees fruition of the highest potential of each student and faculty member.
                    </p>
                    <p>A non-profit institution, RSMT reinvests its surplus to constantly upgrade infrastructure and facilities to promote an environment of learning.</p>
                    <p>
                        Ideally located in Varanasi, the City of Light, which for millennia has been the center of intellectual excellence, RSMT aims to integrate this eternal brilliance into modern Management.<a href="" style="text-decoration:none;">Read more ></a>
                    </p>
                </div>
                
                
<!-----------------------------  Course ------------------------>
                
                 <div class="courses">
                     <div><h3>Courses</h3><hr></div>
                     <div class="course-list">
                        <ul class="course-list-item">
                            <li class="course-name">
                                <div class="course-heading">MCA</div>
                                <div class="course-duration"><b>Duration:</b> 3 Years</div>
                                <div class="course-price">Rs 45000/Year</div>
                            </li>
                            <li class="course-name">
                                <div class="course-heading">MBA</div>
                                <div class="course-duration"><b>Duration:</b> 2 Years</div>
                                <div class="course-price">Rs 46000/Year</div>
                            </li>
                            <li class="course-name">
                                <div class="course-heading">BCA</div>
                                <div class="course-duration"><b>Duration:</b> 3 Years</div>
                                <div class="course-price">Rs 32000/Year</div>
                            </li>
                            <li class="course-name">
                                <div class="course-heading">BBA</div>
                                <div class="course-duration"><b>Duration:</b> 3 Years</div>
                                <div class="course-price">Rs 33000/Year</div>
                            </li>
                        </ul>
                     </div>
                 </div>
                 <div class="campus">
                    <div><h4>OUR CAMPUS</h4><hr></div>
                    <div class="campus-item">
                        <ul>
                            <li><img src="img/campus1.jpg"/></li>
                            <li><img src="img/campus2.jpg"/></li>
                            <li><img src="img/campus3.jpg"/></li>
                            <li><img src="img/campus4.jpg"/></li>
                            <li><img src="img/campus5.jpg"/></li>
                            <li><img src="img/campus6.jpg"/></li>
                        </ul>
                    </div>
                </div>
             </div>
               
<!----------------------- Event -------------------------------->
                <div class="professors col-3">
                    <div class="prof-title">
                        <h3>Our Professors</h3><hr>
                    </div>
                    <div class="prof-list">
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                               <img src="img/t1.jpg"/>
                           </div>
                           <div class="prof-details">
                               <h5 class="prof-name">Dr. Subhash Chandra Yadav</h5>
                               <p>Dr Subhash Yadav have 16 years work experience mainly in universities like MGKVP, BHU, CCSU & west minster (U.K.)</p>
                           </div>
                        </div>
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                               <img src="img/t2.jpg"/>
                           </div>
                           <div class="prof-details">
                               <h5 class="prof-name">Mr. Sanjay Kumar Singh </h5>
                               <p>Mr. Sanjay Singh holds M.Tech (CSE), B.E. (CSE), PGDM (MKTG. & I.T.) and Polytechnic to his credit.</p>
                           </div>
                        </div>
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                               <img src="img/t3.jpg"/>
                           </div>
                           <div class="prof-details">
                               <h5 class="prof-name">Mr. Anand Mohan Pandey</h5>
                               <p>Mr. Anand Mohan Pandey, M.tech and M.C.A. has more than 10 year's experience in industry and academics.</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="event">
                        <div class="event-heading">
                            <h4>Events</h4><hr>
                        </div>    
                            <div class="event-inner">
                                <div class="event-list">
                                    <div class="calender clearfix">
                                        <span class="month">March</span>
                                        <span class="date">03</span>
                                    </div>
                                    <div class="event-details">
                                        <h5>Workshop 'IT –Industry and Academics Interface'</h5>
                                        <p>Seminar Hall 4:30 PM to 6:00 PM</p>
                                    </div>
                                </div>
                                <div class="event-list">
                                    <div class="calender clearfix">
                                        <span class="month">March</span>
                                        <span class="date">25</span>
                                    </div>
                                    <div class="event-details">
                                        <h5>Workshop 'Skill Devlopment,PHP and Database'</h5>
                                        <p>Seminar Hall 11:30 AM to 4:00 PM</p>
                                    </div>
                                </div>
                                <div class="event-list">
                                    <div class="calender clearfix">
                                        <span class="month">April</span>
                                        <span class="date">13</span>
                                    </div>
                                    <div class="event-details">
                                        <h5>Workshop 'Android and Academics Interface'</h5>
                                        <p>Seminar Hall 10:30 AM to 3:00 PM</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
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
<script>
    var myIndex = 0;
    image_slide();
    
    function image_slide() {
        var i;
        var x = document.getElementsByClassName("gal-img");
        
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        
        myIndex++;
        
        if (myIndex > x.length) {
            myIndex = 1;
        }
        x[myIndex-1].style.display = "block";
        setTimeout (image_slide, 4000);
    }
</script>

</html>