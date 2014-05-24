<html>
<head>
	<style>
		body{background-image: url(lock.jpg); background-size:cover; background-repeat:no-repeat;}
		#container{
			border-style:double;
			border-radius:10px;
			background-color:rgba(153,153,153,0.7);
			width:400px;
			height:95px;
			padding-left:10px;
			padding-top:0px;
			padding-bottom:0px;
			margin-top:20px;
			margin-left:480px;
		}
		#container p{
			color:#000;
		}
	</style>
</head>
</html>

<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$courseid=mysql_real_escape_string($_GET['courseid']);
$qryIns="SELECT * FROM course_enrolled c, student_info s, course c1 WHERE s.roll=c.roll AND c.courseID='$courseid' AND c1.courseID='$courseid'";
$resInt=mysql_query($qryIns);

$num = mysql_num_rows($resInt);
	while($row = mysql_fetch_array($resInt))
	{
		echo "<div id='container'><p>Course ID:- ".$row['courseID']."<br>
		Course Name:- ".$row['coursename']."<br>
		Student Name:- ".$row['name']."</p><br></div>";
	}
?>