<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password']))
{
	header('location: login.php');
}
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
	$username=$_SESSION['username'];
}
error_reporting(0);
?>
<html>
  
	<head>
		<title>Institute Management System</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">
			body{background-image: url(write.jpg); background-size:cover; background-repeat:no-repeat;}
			#heading{
				width:650px;
				height:50px;
				padding-left:540px;
				padding-top:20px;
				font-size:15px;
			}
			input[type=submit] {
				border-radius:5px;
				width:80px;
				height:30px;
				margin-left:35px;
			}
			#container{
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style:double;
				width:250px;
				height:270px;
				margin-top:60px;
				margin-left:530px;
			}
		</style>
	</head>

<body>
	
    <div id="heading">
    	<h1 style="color: #FFF;">Change Password</h1>
    </div>
  <div id="container">
		<form action="change_password_script.php" method="post" style="padding-left:50px; padding-top:20px">
		Old Password:<br>
		<input type="password" name="opass" style="border-radius:5px; width:150px; height:25px"><br><br>
		New Password:<br>
		<input type="password" name="npass" style="border-radius:5px; width:150px; height:25px"><br><br>
		Re-Enter New Password:<br>
		<input type="password" name="rnpass" style="border-radius:5px; width:150px; height:25px"><br><br>
		<input type="submit" value="Reset">
		</form
	</div><br>
	<?php echo $_GET['m1'];?>
  </div>
</body>
</html> 