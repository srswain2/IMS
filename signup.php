<!DOCTYPE HTML>
<?php 
session_start();
if (isset($_SESSION['email']))
	header('location: welcome.php');

error_reporting(0);
?>
<html>
  
	<head>
		<title>Institute Management System</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">
			body{background-image: url(Computer.jpg); background-size:cover; background-repeat:no-repeat; height:770px}
			#heading{
				width:500px;
				height:50px;
				padding-left:450px;
				padding-top:-5px;
				font-size:24px;
			}
			#signup{
				width:300px;
				height:20px;
				padding-top:350px;
				padding-left:520px;
				margin-top:2px;
			}
			#container {
				position: relative;
    			width: 320px;
    			height:690px;
    			top: 45%;
    			left: 52%;
    			margin-top: -330px;
    			margin-left: -170px;
				background: rgba(153,153,153,0.7);
    			border-radius: 10px;
    			box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
			}
			#alter {
				position: relative;
    			width: 150px;
    			height:90px;
    			top: 75%;
    			left: 52%;
    			margin-top: -1023px;
    			margin-left: 200px;
				background: rgba(153,153,153,0.7);
    			border-radius: 10px;
    			border: 1px solid #000;
    			box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
			}
			
			form {
    			margin: 0 auto;
    			margin-top: 15px;
			}
			label {
    			color: #000;
    			display: inline-block;
    			margin-left: 27px;
    			padding-top:15px;
    			font-size: 14px;
			}
			input {
    			font-family: "Helvetica Neue", Helvetica, sans-serif;
    			font-size: 12px;
    			outline: none;
			}
			
			input[type=text],
			input[type=password],
			input[type=number],
			input[type=email],
			input[type=tel]{
    			color: #222;
    			padding-left: 15px;
    			margin: 10px;
    			margin-top: 5px;
    			margin-left: 26px;
    			width: 250px;
    			height: 30px;
			} 

			input[type=radio]{
				display:inline-block;
				margin-left:50px;
				margin-right:-15px;
    			background-color: #e7e7e7;
    			border-color: #ddd;
			}
			#lower {
    			background: rgba(255,255,255,0.7);
    			width: 100%;
    			height: 69px;
    			margin-top: 2px;
				border-radius:0 0 10px 10px;
			}
			input[type=submit] {
    			float: right;
    			margin-right: 115px;
    			margin-top: 20px;
    			width: 80px;
    			height: 30px;
			}
		</style>
	</head>

<body>
	
    <div id="heading">
    	<h2 style="color: #000;">Institute Management System</h2>
    </div>
  <div id="container">       
	<form method="post" action="signup_script.php">
		<label for="first">First Name:</label><?php echo $_GET['m1'];?>
		<input type="text" id="first" name="first" placeholder="First Name" required>
		<label for="last">Last Name:</label><?php echo $_GET['m2'];?>
		<input type="text" id="last" name="last" placeholder="Last Name" required>
		<label for="email">E-Mail ID:</label><?php echo $_GET['m3'];?>
		<input type="email" id="email" name="email" placeholder="Enter E-Mail Id" required value="">
        <input type="radio" id="radio1" name="radios" value="student" checked>
   		<label for="radio1">Student</label>
		<input type="radio" id="radio2" name="radios" value="faculty">
   		<label for="radio2">Faculty</label>
		<label for="roll">Roll no.(Student/Faculty):</label><?php echo $_GET['m4'];?>
		<input type="text" id="roll" name="roll" placeholder="Enter Your Roll no." required>
        <label for="address">Address:</label>
		<input type="text" id="address" name="address" placeholder="Enter Your Address" required>
        <label for="npass">New Password:</label><?php echo $_GET['m5'];?>
		<input type="password" id="npass" name="npass" placeholder="Minimum 6 Characters" required>
        <label for="npass1">Re-Enter Password:</label><?php echo $_GET['m6'];?>
		<input type="password" id="npass1" name="npass1" placeholder="Enter Password Again" required>
        
	<div id="lower">
		<input type="submit" value="Sign Up">
	</div><!--/ lower-->
	</form>
	<div id="alter">
		<form method="post" action="login.php" style"padding-top:2px; padding-left:35px;">
			<label for="back" style="padding-top:2px; padding-left:13px;"> Go Back for</label>
			<div id="goBack" style="margin-top:-10px; margin-right:-80px;">
			<input type="submit" value="Sign In">
			</div?
		</form>
	</div>
  </div>
</body>
</html> 