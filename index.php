<?php 
require('dbconn.php');
?>

<!DOCTYPE html>
<html>

<!-- Head -->
<head>


	<title>Library Management System </title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> -->
	<!-- //Fonts -->

	<!-- <title>Developers' Information</title>
    <style>
        /* Add your CSS styling here */
        .developer-card {
            display: flex;
            align-items: center;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .developer-picture {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .developer-info {
            flex: 1;
        }
    </style> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 



</head>
<!-- //Head -->

<!-- Body -->
<body>

<!-- style cards -->
<style> 
        /* Styles for the developer cards */
.containerf {
    margin: 0 auto;
    max-width: 1000px;
    padding: 20px;
	
}

.footer {
    background-color: rgba(5,5,5,0.77);
    /* box-shadow: ; */
    color: #fff;
	/* border-color: white; */
	/* border: 1px; */
    padding: 20px;
}


.card-heading{
	color: #fff;
    text-align: center;
    margin-top: 20px;
	margin-bottom: 20px;
	font-weight: bold;
}
.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.col {
    flex: 0 0 calc(25% - 20px);
    margin-bottom: 20px;
    padding: 10px;
    /* height: 400px; */
}

.developer-card {
    /* background-color: #fff; */
	background-color: rgba(0,0,0, 0.90);
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: box-shadow 0.3s;
    height: 400px;
}

.developer-card:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5), 0 0 40px rgba(0, 0, 0, 0.3);
}

.developer-card .image-wrapper {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin: 0 auto 10px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s;
}

.developer-card .image-wrapper:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5), 0 0 20px rgba(0, 0, 0, 0.3);
}

.developer-card img {
    max-width: 100%;
    height: auto;
}

.developer-name {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}

.developer-description {
    font-size: 14px;
    color: #444;
}

.social-icons {
    list-style: none;
    padding: 0;
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

.social-icons li {
    margin: 0 5px;
}

.social-icons a {
    color: #007bff;
    font-size: 24px;
}

.footer-bottom {
	color: #fff;
    text-align: center;
    margin-top: 20px;
}

 </style>


<!-- js form validation sign up form -->
<script>
        function validateF1(){
            var name = document.myform.Name.value;
            var PhoneNumber = document.myform.PhoneNumber.value;
            var password=document.getElementById("password").value;
            var em=document.getElementById("email").value;
	
            // if (isNaN(password) ||(password.length<8||password.length>15)){  
            //     alert("Password must be 8- 15 characters long");                  
            //     return false; 
			
			// Regular expression for password validation
			var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,15}$/;

            if (!passwordRegex.test(password)) {
	            alert("Password must contain at least one uppercase letter, one lowercase letter, one number, one special character, and be 8-15 characters long");
	            return false;
            }else if(PhoneNumber==null || PhoneNumber==""){                  
                alert("Phone number is required");  
                return false;  
            }else if (isNaN(PhoneNumber) || PhoneNumber.length!==10 ) {    
                alert("Enter Correct 10 Digit Phone Number");
                return false;  
			}
			else if (em.indexOf("@") === -1 ||
                  (!em.endsWith("@gmail.com") && !em.endsWith("@outlook.com") && !em.endsWith("@aissmscoe.com"))) {
                alert("Email-id is not valid!")
                return false;
            }
        }  
           
    </script>


<div>
	<!-- <img style="padding: 30px 0px 0px 0px; margin: 10px 0px" src="https://yt3.googleusercontent.com/ytc/AOPolaS27acnEMNy5gZqdVyLgHODTwtJvdpoFdIwsLSK=s900-c-k-c0x00ffffff-no-rj" alt="logo" width="125px" height="125px"/> -->
    <!-- <img style="padding: 30px 0px 0px 0px; margin: 10px 0px" src="images/compdeptlogo1.jpg" alt="" class="src" height=100 width=125>    -->
</div>

<div>
 <img style="padding: 30px 0px 0px 0px; margin: 10px 0px" src="images/compdeptlogo1.jpg" alt="" class="src" height=100 width=125> 
	<h1 style="padding: 10px 0px 70px 0px; margin: 0px 0px">AISSMS COE COMPUTER DEPT. E-LIBRARY</h1>

	<div class="container">

		<div class="login">
			<h2>Sign In</h2>
			<h4 style="color: whitesmoke;">(Student/Staff/Admin)</h4>
			<br>
			<form action="index.php" method="post">
				<input type="text" Name="RollNo" placeholder="Roll No/Staff ID" required="">
				<input type="password" Name="Password" placeholder="Password" required="">
			
			
			<div class="send-button">
				<!--<form>-->
					<input type="submit" name="signin"; value="Sign In">
				</form>
			</div>
			
			<div class="clear"></div>
		</div>

		<div class="register">
			<h2>Sign Up</h2>
			<h4 style="color: whitesmoke;">(Student/Staff)</h4>
			<br>
			<form action="index.php" method="post" name="myform" onsubmit="return validateF1()">
				<input type="text" Name="Name" placeholder="Name*" required>
				<input type="text" Name="Email" id="email" placeholder="Email*" required>
				<input type="password" Name="Password" id="password" placeholder="Password*" required>
				<input type="text" Name="PhoneNumber" placeholder="Phone Number*" required>
			
				<label style="color:white" for="Category" >Select Role* (Student/Staff):</label><br>
				<select name="Category" id="Category">
					<!-- <option>Select Class</option> -->
					<option value="Student-BE">Student-BE</option>
					<option value="Student-TE">Student-TE</option>
					<option value="Student-SE">Student-SE</option>
					<option value="Staff">Staff</option>
					<!-- <option value="ST">staff</option> -->
				</select>
				<br>
				<br>
				<input type="text" Name="RollNo" placeholder="Roll Number/Staff ID*" required>
				
        
			
			
			<br>
			<div class="send-button">
			    <input type="submit" name="signup" value="Sign Up">
			    </form>
			</div>
			<p>By creating an account, you agree to our <a class="underline" href="terms.html">Terms</a></p>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	</div>

	<!-- <div class="footer w3layouts agileits">
		<p> &copy; AISSMSCOE Computer Department</a></p>
		
	</div> -->
</div>

<?php
if(isset($_POST['signin']))
{$u=$_POST['RollNo'];
 $p=$_POST['Password'];
//  $c=$_POST['Category'];

 $sql="select * from LMS.user where RollNo='$u'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$x=$row['Password'];
$y=$row['Type'];
if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
  {//echo "Login Successful";
   $_SESSION['RollNo']=$u;
   

  if($y=='Admin')
        echo "<script> window.location.href='admin/index.php';</script>";
//    header('location:admin/index.php');

  else
    echo "<script> window.location.href='student/index.php';</script>";

  	// header('location:student/index.php');
        
  }
else 
 { echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password')</script>";
}
   

}

if(isset($_POST['signup']))
{
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$mobno=$_POST['PhoneNumber'];
	$rollno=$_POST['RollNo'];
	$category=$_POST['Category'];
	$type='Student';

	$sql="insert into LMS.user (Name,Type,Category,RollNo,EmailId,MobNo,Password) values ('$name','$type','$category','$rollno','$email','$mobno','$password')";

	if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Registration Successful')</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('User Exists')</script>";
}
}

?>


<!-- foooter -->
<!-- <footer> -->
<footer class="footer">
	<!-- <div class="heading-footer"  >
		<p class="card-heading"></p>
	</div> -->
<div class="containerf">
             <h2 class="card-heading"><b>Meet the Team</b></h2>
        
            <div class="row">
                <!-- Developer 1 -->
                <div class="col">
                    <div class="developer-card">
                        <div class="image-wrapper">
                            <img src="images/dr_shashikant_athawlepic.jpg" alt="Developer 1">
                        </div>
                        
                        <h5 class="developer-name"><b>Dr. Shashikant V. Athawale</b></h5>
                        <p class="developer-description">Mentor<br>
                        Eminent Academician <br> | Wireless Ad hoc Network Research Expert
                        <br>| Assistant Professor at AISSMS,Coe,Pune.</p>
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.linkedin.com/in/dr-shashikant-athawale-9a5583106/" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="developer1-instagram-url" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>

                <!-- Developer 2 -->
                <div class="col">
                    <div class="developer-card">
                        <div class="image-wrapper">
                            <img src="images/sushilpic.png" alt="Developer 2">
                        </div>
                        <h5 class="developer-name"><b>Sushil Mhetre</b></h5>
                        <p class="developer-description">Developer<br>
                         BE Computer Engineering <br>student at AISSMSCOE <br> | MERN Stack Developer <br> | Secretary at IUCEE</p>
                         <br><br>
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.linkedin.com/in/sushil-mhetre-1a99b11b9/" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="developer2-instagram-url" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Developer 3 -->
                <div class="col">
                    <div class="developer-card">
                        <div class="image-wrapper">
                            <img src="images/sanketpic4.jpg" alt="Developer 3">
                        </div>
                        <h5 class="developer-name"><b>Sanket Lipne<b></h5>
                        <p class="developer-description">Developer<br>
                        BE Computer Engineering <br>student at AISSMSCOE <br>| Full Stack Developer <br> | Competitive Programmer</p>
                        <br><br>
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.linkedin.com/in/sanket-lipne-b65a87223/" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="developer3-instagram-url" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


<!-- Developer 4 -->
                <div class="col">
                    <div class="developer-card">
                        <div class="image-wrapper">
                            <img src="images/sumitpic.jpeg" alt="Developer 4">
                        </div>
                        <h5 class="developer-name"><b>Sumit Koli</b></h5>
                        <p class="developer-description">Developer<br>
                         BE Computer Engineering <br>student at AISSMSCOE<br>| Python Enthusiast <br>| Backend Developer</p>
                         <br><br>
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.linkedin.com/in/sumit-koli-4a8639212/" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="developer4-instagram-url" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

			<!-- <div class="footer w3layouts agileits">
		      <p> &copy; AISSMSCOE Computer Department</a></p>
	         </div> -->

            <div class="footer-bottom">
                © AISSMSCOE Computer Department. All rights reserved.
            </div>
        
    </div>
	</footer>

<!-- <div class="footer w3layouts agileits">
		<p> &copy; AISSMSCOE Computer Department</a></p>
		
	</div>
</footer> -->


<!-- chatbot -->
<script src="app.js"></script>
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/6422e82531ebfa0fe7f522f5/1gsk5lksd';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>


</body>
<!-- //Body -->

</html>
