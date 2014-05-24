<html>
<head>
	<style>
		body{background-image: url(lock.jpg); background-size:cover; background-repeat:no-repeat;}
		#container{
			border-style:double;
			border-radius:10px;
			background-color:rgba(153,153,153,0.7);
			width:400px;
			height:115px;
			padding-left:10px;
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
$qryIns="SELECT * FROM course c, faculty_info f, department d WHERE f.roll=c.roll_f AND c.courseID LIKE CONCAT(d.code,'%')";
$resInt=mysql_query($qryIns);

$num = mysql_num_rows($resInt);
	while($row = mysql_fetch_array($resInt))
	{
		echo "<div id='container'><p>Course ID:- ".$row['courseID']."<br>
		Course Name:- ".$row['coursename']."<br>
		Department:- ".$row['dept_name']."<br>
		Faculty Name:- Prof. ".$row['name']."</p><br></div>";
	}
?>