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
				padding-left:600px;
				padding-top:10px;
				font-size:20px;
			}
			input[type=submit] {
				border-radius:5px;
				width:80px;
				height:30px;
			}
			#container{
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style:double;
				width:465px;
				height:240px;
				margin-top:80px;
				margin-left:450px;
			}
		</style>
	</head>

<body>
	
    <div id="heading">
    	<h1 style="color: #FFF;">Feedback</h1>
    </div>
  <div id="container">
		<form action="feedback_script.php" method="get" style="padding-left:20px; padding-top:20px">
		Course-ID:<br>
		<input type="text" name="courseid" style="border-radius:5px; width:65px"><br><br>
		Write Your Feedback:<br>
		<textarea rows="3" cols="50" name="textarea" style="border-radius:5px">
		</textarea><br><br>
		<input type="submit" value="Submit">
		</form
	</div><br>
	<?php echo $_GET['m1'];?>
  </div>
</body>
</html> 