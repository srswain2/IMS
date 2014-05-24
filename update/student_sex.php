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
			input[type=submit] {
				border-radius:5px;
				width:80px;
				height:30px;
			}
			#container{
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style:double;
				width:230px;
				height:110px;
				margin-top:80px;
				margin-left:530px;
			}
			#result{
				padding-left:530px;
				color:#FFF;
			}
			#success{
				margin-left:590px;
			}
		</style>
	</head>

<body>
<?php
	require('dbconf.inc');
	db_connect();
	session_start();
	$username=$_SESSION['username'];
	$qryIns="SELECT * FROM admin WHERE email='$username'";
	$resInt=mysql_query($qryIns);

	$num = mysql_num_rows($resInt);
	$row = mysql_fetch_array($resInt);
    echo "	<div id='container'>
		<form action='student_sex.php' method='GET' style='padding-left:50px; padding-top:20px' enctype='multipart/form-data'>
			<input type='radio' id='radio1' name='radios' value='male' checked>
			<label for='radio1'>Male</label>
			<input type='radio' id='radio2' name='radios' value='female'>
			<label for='radio2'>Female</label>
			<input type='submit' name='submit' value='Update' style='margin-top:15px; margin-left:25px'>
		</form>
	</div><br>
	</div>";
	$roll=$row['roll'];
	if(isset($_GET['submit']))
	{
		$sex=$_GET['radios'];
		mysql_query("UPDATE student_info SET `sex`='$sex' WHERE roll='$roll'");
		echo "<div id='success' style='color:white'><strong>Updated Successfully</strong></div>";
	}
 ?>
</body>
</html> 