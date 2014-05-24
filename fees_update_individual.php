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
				padding-left:555px;
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
				height:400px;
				margin-top:80px;
				margin-left:530px;
			}
			#result{
				padding-left:550px;
				color:#FFF;
			}
		</style>
	</head>

<body>
	
    <div id="heading">
    	<h1 style="color: #FFF;">Fees Update</h1>
    </div>
  <div id="container">
		<form action="fees_update_individual_script.php" method="get" style="padding-left:25px; padding-top:20px;width:200px;float:middle;">
		<p style="margin-left:60px">Enter Roll No.:</p>
		<input type="text" name="roll" style="border-radius:5px; width:100px;height:30px;margin-top:-10px;margin-left:50px">
		<p style="padding-left:25px;">Enter Fees Amount (Rs.):</p>
		<input type="text" name="amount" style="border-radius:5px; width:120px;height:30px;margin-left:40px;margin-top:-10px">
		<p style="margin-left:20px">Enter Fine Amount (if any):</p>
		<input type="text" name="fine" style="border-radius:5px; width:100px;height:30px;margin-top:-10px;margin-left:50px">
		<p style="margin-left:60px">Enter Status:</p>
		<input type="text" name="status" style="border-radius:5px; width:100px;height:30px;margin-top:-10px;margin-left:50px">
		<input type="submit" value="Update" style="margin-top:25px; margin-left:60px">
		</form>
	</div><br>
	<div id="result">
		<?php echo $_GET['m1'];?>
	</div>
  </div>
</body>
</html> 