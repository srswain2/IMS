<html>
<head>
	<style>
			body{background-image: url(write.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				background:rgba(153,153,153,0.7);
				width:310px;
				height:450px;
				padding-left:20px;
				padding-top:1px;
				border-radius:10px;
				margin-top:-20px;
				margin-left:500px;
				border-style:double;
			}
			#head h1{
				padding-left:60px;
			}
			#pic{
				margin-left:620px;
				margin-top:30px;
			}
			#pic img{
				height:100px;
				width:90px;
				border-radius:5px;
			}
			#button{
				margin-left:500px;
			}
	</style>
</head>
<body>
<?php

require('dbconf.inc');
db_connect();
session_start();
$username=$_SESSION['username'];
$qryIns="SELECT * FROM admin a, student_info s WHERE s.roll=a.roll AND a.email='$username'";
$resInt=mysql_query($qryIns);

$num = mysql_num_rows($resInt);
$row = mysql_fetch_array($resInt);
echo "	<div id='pic'>
			<img src='showimage.php'>
		</div>
		<div id='back' style='margin-left:1200px; background:rgba(153,153,153,0.7); width:50px; padding-left:8px; border-radius:20px;'>
			<a href='javascript:Back()'><img src='back.png' style='height:40px;'></a>
		</div>
		<script type='text/javascript'>
			function Back() {
				window.history.back();
			}
		</script>
		<div id='container'>
			<div id='head'>
				<h1>Information</h1>
			</div>
			<div id='name'>
				<p><strong>Name:</strong> ".$row['name']."</p>
			</div>
			<div id='roll'>
				<p><strong>Roll No.:</strong> ".$row['roll']."</p>
			</div>
			<div id='dob'>
				<p><a href='update\student_dob.php' style='text-decoration:none;color:#000;'><strong>Date of Birth:</strong></a> ".$row['dob']."</p>
			</div>
			<div id='sex'>
				<p><a href='update\student_sex.php' style='text-decoration:none;color:#000;'><strong>Sex:</strong></a> ".$row['sex']."</p>
			</div>
			<div id='father'>
				<p><a href='update\student_father.php' style='text-decoration:none;color:#000;'><strong>Father's Name:</strong></a> ".$row['father']."</p>
			</div>
			<div id='mother'>
				<p><a href='update\student_mother.php' style='text-decoration:none;color:#000;'><strong>Mother's Name:</strong></a> ".$row['mother']."</p>
			</div>	
			<div id='dept'>
				<p><a href='update\student_dept.php' style='text-decoration:none;color:#000;'><strong>Department:</strong></a> ".$row['dept']."</p>
			</div>
			<div id='program'>
				<p><a href='update\student_program.php' style='text-decoration:none;color:#000;'><strong>Programme:</strong></a> ".$row['program']."</p>
			</div>
			<div id='mno'>
				<p><a href='update\student_mno.php' style='text-decoration:none;color:#000;'><strong>Mobile No.:</strong></a> ".$row['mno']."</p>
			</div>
			<div id='address'>
				<p><a href='update\student_address.php' style='text-decoration:none;color:#000;'><strong>Address:</strong></a> ".$row['address']."</p>
			</div>
		</div>
		<div id='button'>
				<form action='profile_student.php' method='POST' enctype='multipart/form-data'>
					<input type='file' name='image' style='width:200px; padding-left:20px;'><input type='submit' name='submit' value='Change Picture' style='border-radius:5px; width:120px; height:30px;'>
				</form>
		</div>";

if(isset($_POST['submit']))
{
	$roll=$row['roll'];
	$imageName=mysql_real_escape_string($_FILES["image"]["name"]);
	$imageData=mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
	$imageType=mysql_real_escape_string($_FILES["image"]["type"]);
	
	if(substr($imageType,0,5)=="image")
	{
		mysql_query("UPDATE picture SET `pic_name`='default', image='$imageData' WHERE roll='$roll'");
	}
	else
	{	
		echo "Only images are allowed";
	}
}
?>
</body>
</html>