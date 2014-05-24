<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$courseid=mysql_real_escape_string($_GET['courseid']);
$qryIns="SELECT * FROM course c, faculty_info f WHERE c.courseID='$courseid' AND f.roll=c.roll_f";
$resInt=mysql_query($qryIns);
$row = mysql_fetch_array($resInt);
$num = mysql_num_rows($resInt);
if($num == 1)
{
	$m="Course ID:- ".$row['courseID']."<br>
		Course Name:- ".$row['coursename']."<br>
		Faculty Name:- Prof. ".$row['name']."<br>";
	header('location:course_search_id.php?m1='.$m);
}
else
{
	$m = "<span style='color:red'><strong>Course ID not found</strong></span>";
	header('location:course_search_id.php?m1='.$m);
}
?>