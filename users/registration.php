<?php
include('includes/config.php');
include('includes/db.php');
error_reporting(0);
if(isset($_POST['submit']))
{
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$university = $_POST['university'];
	$college = $_POST['college'];
	$department = $_POST['department'];
	$year = $_POST['year'];
	$password=md5($_POST['password']);
	$contactno=$_POST['contactno'];
	$state = $_POST['state'];
	$status=1;
	$query=mysqli_query($bd, "insert into users(fullName,userEmail,password,contactNo,status,university,college,department,year,State) values('$fullname','$email','$password','$contactno','$status','$university','$college','$department','$year','$state')");
	$msg="Registration successfull. Now You can login !";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>CMS | User Registration</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post">
		        <h2 class="form-login-heading">User Registration</h2>
		        <p style="padding-left: 1%; color: green">
		        	<?php if($msg){
echo htmlentities($msg);
		        		}?>


		        </p>
		        <div class="login-wrap">
		         <input type="text" class="form-control" placeholder="Full Name" name="fullname" required="required" autofocus>
		            <br>
		            <input type="email" class="form-control" placeholder="Email (Clg id)" id="email" onBlur="userAvailability()" name="email" required="required">
		             <span id="user-availability-status1" style="font-size:12px;"></span>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" required="required" name="password"><br >
		             <input type="text" class="form-control" maxlength="10" name="contactno" placeholder="Contact no" required="required" autofocus>
		            <br>

		            <p>Select State</p>
		            <select class="form-control" name="state">
		            	<option value="">Select a state</option>
  <option value="Andhra Pradesh">Andhra Pradesh</option>
  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
  <option value="Assam">Assam</option>
  <option value="Bihar">Bihar</option>
  <option value="Chhattisgarh">Chhattisgarh</option>
  <option value="Goa">Goa</option>
  <option value="Gujarat">Gujarat</option>
  <option value="Haryana">Haryana</option>
  <option value="Himachal Pradesh">Himachal Pradesh</option>
  <option value="Jharkhand">Jharkhand</option>
  <option value="Karnataka">Karnataka</option>
  <option value="Kerala">Kerala</option>
  <option value="Madhya Pradesh">Madhya Pradesh</option>
  <option value="Maharashtra">Maharashtra</option>
  <option value="Manipur">Manipur</option>
  <option value="Meghalaya">Meghalaya</option>
  <option value="Mizoram">Mizoram</option>
  <option value="Nagaland">Nagaland</option>
  <option value="Odisha">Odisha</option>
  <option value="Punjab">Punjab</option>
  <option value="Rajasthan">Rajasthan</option>
  <option value="Sikkim">Sikkim</option>
  <option value="Tamil Nadu">Tamil Nadu</option>
  <option value="Telangana">Telangana</option>
  <option value="Tripura">Tripura</option>
  <option value="Uttar Pradesh">Uttar Pradesh</option>
  <option value="Uttarakhand">Uttarakhand</option>
  <option value="West Bengal">West Bengal</option>
		            	
		            </select>
		            <br>
		            <p>Select University</p>
		            <select class="form-control" name="university">
					<option>University of Rajasthan (RU)</option>
					<option>Malaviya National Institute of Technology (MNIT)</option>
					<option>Rajasthan Technical University (RTU)</option>
					<option>Jaipur National University (JNU)</option>
					<option>Amity University Jaipur</option>
					<option>Manipal University Jaipur (MUJ)</option>
					<option>Rajasthan University of Health Sciences (RUHS)</option>
					<option>Jaipur Engineering College and Research Centre (JECRC)</option>
					<option>Birla Institute of Technology, Jaipur (BIT Jaipur)</option>
		            </select>
		            <br>

		            <p>Select College</p>
		            <select class="form-control" name="college">
						<option>Rajasthan State Institute of Agricultural Management</option>
						<option>Rajasthan College of Engineering for Women</option>
						<option>Commerce College</option>
						<option>Maharaja College</option>
						<option>Maharani College</option>
						<option>University Law College</option>
						<option>Rajasthan College</option>
						<option>University Science College</option>
						<option>Rajasthan College of Engineering for Women (RCEW)</option>
						<option>Rajasthan Institute of Engineering and Technology (RIET)</option>
						<option>Jaipur Engineering College and Research Centre (JECRC)</option>
						<option>Arya College of Engineering and IT</option>
						<option>Poornima Group of Colleges</option>
						<option>Jagannath University</option>
						<option>Swami Keshvanand Institute of Technology, Management & Gramothan (SKIT)</option>
						<option>RUHS College of Medical Sciences</option>
						<option>RUHS College of Dental Sciences</option>
						<option>RUHS College of Nursing</option>
						<option>RUHS College of Pharmacy</option>
		            </select>
		            <br>
		            <p>Select Department</p>
		            <select class="form-control" name="department">
						<option>Computer Science and Engineering</option>
						<option>Electrical Engineering</option>
						<option>Electronics and Communication Engineering</option>
						<option>Mechanical Engineering</option>
						<option>Civil Engineering</option>
						<option>Chemical Engineering</option>
						<option>Mining Engineering</option>
						<option>Structural Engineering</option>
						<option>Bioengineering</option>	            	
		            </select>
		            <br>
		            <p>Select Year</p>
		            <select class="form-control" name="year">
						<option value="First">First</option>
						<option value="Second">Second</option>
						<option value="Third">Third</option>
						<option value="Fourth">Fourth</option>	
		            </select>
		            <br>
		            
		            <button class="btn btn-theme btn-block"  type="submit" name="submit" id="submit"><i class="fa fa-user"></i> Register</button>
		            <hr>
		            
		            <div class="registration">
		                Already Registered<br/>
		                <a class="" href="index.php">
		                   Sign in
		                </a>
		            </div>
		
		        </div>
		
		      
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
