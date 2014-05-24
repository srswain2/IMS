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
			body{background-image: url(lock.jpg); background-size:cover; background-repeat:no-repeat;}
			#heading{
				width:650px;
				height:50px;
				padding-left:500px;
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
				width:250px;
				height:140px;
				margin-top:80px;
				margin-left:530px;
			}
			#result{
				padding-left:530px;
				color:#FFF;
			}
		</style>
	</head>

<body>
	
    <div id="heading">
    	<h1 style="color: #FFF;">Search by Name</h1>
    </div>
  <div id="container">
		<form action="enroll_course_search_name_result.php" method="get" style="padding-left:65px; padding-top:20px">
		Enter Course Name:<br>
		<input type="text" name="coursename" style="border-radius:5px; width:120px;height:30px"><br><br>
		<br><br>
		<input type="submit" value="Search" style="margin-top:-40px; margin-left:20px">
		</form>
	</div><br>
	<div id="result">
	</div>
  </div>
</body>
</html> 