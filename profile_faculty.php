<html>
<head>
	<style>
			body{background-image: url(write.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				background:rgba(153,153,153,0.7);
				width:300px;
				height:280px;
				padding-left:20px;
				padding-top:1px;
				border-radius:10px;
				margin-top:5px;
				margin-left:500px;
				border-style:double;
			}
			#head h1{
				margin-left:580px;
				color:#FFF;
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
$qryIns="SELECT *, basic+bonus 'total' FROM admin a, faculty_info f, faculty_detail fd, picture p, salary s WHERE a.email='$username' AND a.roll=f.roll AND a.roll=fd.roll AND a.roll=p.roll AND a.roll=s.roll";
$resInt=mysql_query($qryIns);

$num = mysql_num_rows($resInt);
$row = mysql_fetch_array($resInt);
echo "	<div id='head'>
			<h1>Information</h1>
		</div>
		<div id='pic'>
			<img src='showimage.php'>
		</div>
		<div id='container'>
			<div id='name'>
				<p><strong>Name:</strong> Prof. ".$row['name']."</p>
			</div>
			<div id='roll'>
				<p><strong>ID.:</strong> ".$row['roll']."</p>
			</div>
			<div id='dob'>
				<p><a href='update/faculty_dob.php' style='text-decoration:none; color:#000'><strong>Date of Birth:</strong></a> ".$row['dob']."</p>
			</div>
			<div id='designation'>
				<p><a href='update/faculty_designation.php' style='text-decoration:none; color:#000'><strong>Designation:</strong></a> ".$row['designation']."</p>
			</div>
			<div id='degree'>
				<p><a href='update/faculty_degree.php' style='text-decoration:none; color:#000'><strong>Degrees:</strong></a> ".$row['degree']."</p>
			</div>
			<div id='mno'>
				<p><a href='update/faculty_mno.php' style='text-decoration:none; color:#000'><strong>Contact:</strong></a> ".$row['mno']."</p>
			</div>
			<div id='sal'>
				<p><strong>Salary:</strong> ".$row['total']."</p>
			</div>
		</div>
		<div id='button'>
				<form action='profile_faculty.php' method='POST' enctype='multipart/form-data'>
					<input type='file' name='image' style='width:200px; padding-left:20px;'><input type='submit' name='submit' value='Change Picture' style='border-radius:5px; width:120px; height:30px;'>
				</form>
		</div>";
?>

<?php

if(isset($_POST['submit']))
{
	$username=$_SESSION['username'];
	$qryIns="SELECT roll FROM admin WHERE email='$username'";
	$resInt=mysql_query($qryIns);
	$row = mysql_fetch_array($resInt);
	$roll=$row['roll'];
	$imageName=mysql_real_escape_string($_FILES["image"]["name"]);
	$imageData=mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
	$imageType=mysql_real_escape_string($_FILES["image"]["type"]);
	
	if(substr($imageType,0,5)=="image")
	{
		mysql_query("UPDATE picture SET image='$imageData' WHERE roll='$roll'");
	}
	else
	{	
		echo "Only images are allowed";
	}
}
?>
</body>
</html>