<html>
<head>
	<style>
			body{background-image: url(write.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				background:rgba(153,153,153,0.7);
				width:400px;
				height:130px;
				padding-left:20px;
				padding-top:1px;
				border-radius:10px;
				margin-top:50px;
				margin-left:450px;
				border-style:double;
			}
			#head h1{
				padding-left:490px;
				padding-top:50px;
				color:#FFF;
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
$row1 = mysql_fetch_array($resInt);
$roll=$row1['roll'];

$result=mysql_query("SELECT * FROM course c natural join feedback f WHERE c.courseID=f.courseID AND roll_f='$roll'");
echo "<div id='head'>
				<h1>Feedback From Students</h1>
			</div>";
while($row=mysql_fetch_array($result))
{
echo "
		<div id='container'>
			<div id='courseid'>
				<p>Course ID: ".$row['courseID']."</p>
			</div>
			<div id='coursename'>
				<p>Course Name: ".$row['coursename']."</p>
			</div>
			<div id='feedback'>
				<p>Feedback: ".$row['feedback']."</p>
			</div>
		</div>";
}
db_close();
?>
</body>
</html>