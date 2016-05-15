<head>
    <meta charset="UTF-8">
    <title>Welcome To RSMT</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/admi.css">
    <link rel="stylesheet" media="screen" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <style>
        html,body{
            width: 100%;
            height: 100%;
        }
        header,footer{
/*            background-color: #333;*/
            padding: 0;
            margin: 0;
        }
        .footer{
            padding: 1%;
        }
        section{
            height: 90%;
            background-image: url(img/login-bg.jpg);
        }
        .top-nav{
            width: 100%;
            box-sizing: border-box;
            padding: 0;
            
        }
        .top-nav a{
            border: 1px solid;
            border-radius: 3px;
        }
        .home{
            float: left;
            box-sizing: border-box;
            padding: 0;
        }
        .home a{
            padding:11px;
            color: #fff;
            text-decoration: none;
            font-size: 1.1em;
            display: inline-block;
            margin: 1px 0 2px 0;
        }
        .admin-content{
            overflow: auto;
/*            width: 100%;*/
            box-sizing: border-box;
        }
        .admin-login,.reg-form{
            background-color:white;
            padding: 15px;
            box-sizing: border-box;
            border-radius: 7px;
            text-align: center;
        }
        .admin-login{
            margin: 13% auto;
/*            padding: 15%;*/
            width: 320px;
/*            height: 40%;*/
        }
        .admin-login input,
        .reg-form input{
            padding: 12px;
            display: block;
            width: 100%;
            margin:10px 0;
            border-radius: 5px;
            border: 1px solid;
        }
        .admin-login input[type="submit"],
        .reg-form input[type="submit"]{
            background-color: #443266;
            color: #fff;
            cursor: pointer;
            font-size: 1.2em;
            margin-bottom: 0;
            transition: .3s;
            border-radius: 6px;
            line-height: 20px;
            width: 100%;
        }
        .admin-login input[type=submit]:hover,
        .reg-form input[type="submit"]:hover{
            background-color: white;
            color: #443266;
            border: 1px solid #443266;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.3);
        }
        .admin-reg-btn{
            margin-top: 10px;
            overflow: auto;
        
        }
        .admin-reg-btn h3{
            margin-bottom: 0;
            font-weight: 400;
        }
        .reg-btn{
            padding: 8px 14px;
            background-color: #443266;
            color: #fff;
            border-radius: 6px;
            cursor: pointer;
            display: inline-block;
            margin-top: 12px;
            border: none;
            float: right;
        }
        .reg-btn:hover{
            color: #bfbfbf;
        }
        .reg-form{
            width: 350px;
            margin: 15% auto;
            border: 1px solid;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,.close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .model-reg{
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width:100%;
            height: 100%;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            animation-name: animatetop;
            animation-duration: 0.4s
        }
        /* Add Animation */

        @keyframes animatetop {
            from {top: -300px; opacity: 0}
            to {top: 0; opacity: 1}
        }
    </style>
</head> 
<body>
<!-------------------------  Header -------------------->
<header>
    <div class="top-nav">
        <div class="home">
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</header>
<section>
    <div class="admin-content">
        <div class="">
            <div class="admin-login clearfix">
                <h2 style="text-align:center;">Admin Panel Login</h2>
                <form action="" method="post">
                    <input type="text" id="userid" name="login_username" placeholder="Username" required>
                    <input type="password" id="pass" name="pass" placeholder="Password" required>
<!--                    <a href="" style="text-decoration:none;">Forgotten your password?</a>-->
<!--
                    <input type="checkbox" id="admin_rem">
                    <label for="admin_rem">Remember me?</label>
-->
                    <input type="submit" name="admin_login" value="Log In">
                </form>
                <div class="admin-reg-btn ">
                    <h3 style="float:left;">Have a Special ID?</h3>
                    <button id="show_reg" class="reg-btn">Register</button>
                </div>
            </div>
            </div>
            <div class="model-reg" id="modal_reg">
                <div class="reg-form">
                <span class="close">x</span>
                <h2 style="text-align:center;">Registration</h2>
                <form>
                    <input type="text" name="reg_special_id" placeholder="Enter Special ID Given By Admin" required>
                    <input type="text" name="admin_username" placeholder="Username" required>
                    <input type="email" name="admin_email" placeholder="Email" required>
                    <input type="password" name="admin_pass" placeholder="Password" required>
                    <input type="submit" name="admin_reg_submit" value="Register" required>
                </form>
                </div>
            </div>
    </div>
</section>

<!------------------ Footer ------------------------>
    <footer>
        <div class="">
            <div class="footer link">
                 <ul class="footer-left">
                <li style="border-right:none;">&copy; Copyright2016.   Designed by <a href="http:/google.com/+aboutvikas">Vikas Seth</a></li>
<!--
                <ul class="footer-right" style="float:right;">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Apply</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </ul>
-->
            </div>
        </div>
    </footer>
</body>
</html>
<script>
var show_reg = document.getElementById('modal_reg');

var btn = document.getElementById("show_reg");

var close = document.getElementsByClassName("close")[0];
    
    btn.onclick = function() {
    show_reg.style.display = "block";
        
}
    close.onclick = function() {
    show_reg.style.display = "none";
}
    // When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == show_reg) {
        show_reg.style.display = "none";
    }
}

</script>  