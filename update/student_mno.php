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
				padding-left:480px;
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
				height:150px;
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
    echo "<div id='heading'>
				<h1 style='color: #FFF;'>Update Contact No.</h1>
			</div>
	<div id='container'>
		<form action='student_mno.php' method='GET' style='padding-left:65px; padding-top:5px' enctype='multipart/form-data'>
		<p style='width:200px; margin-left:-15px;'>Enter Your Mobile No.:</p><br>
		<input type='text' name='mno' style='border-radius:5px; width:150px;height:30px; margin-top:-30px; margin-left:-15px'><br><br>
		<br><br>
		<input type='submit' name='submit' value='Update' style='margin-top:-40px; margin-left:20px'>
		</form>
	</div><br>
	</div>";
	$roll=$row['roll'];
	$regex_num = "/^[789][0-9]{9}$/";
	$mno=mysql_real_escape_string($_GET['mno']);
	if(isset($_GET['submit']))
	{
		if (!preg_match($regex_num, $mno))
		{
			echo "<div id='success' style='color:white; margin-left:540px'><strong>Enter Mobile No. Correctly(10-digits)</strong></div>";
		}
		else
		{
			mysql_query("UPDATE student_info SET `mno`='$mno' WHERE roll='$roll'");
			echo "<div id='success' style='color:white'><strong>Updated Successfully</strong></div>";
		}
	}
	db_close();
 ?>
</body>
</html> 