<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$courseid=mysql_real_escape_string($_GET['courseid']);
$sroll=mysql_real_escape_string($_GET['sroll']);
$resInt=mysql_query("SELECT * FROM course_enrolled WHERE roll='$sroll' AND courseID='$courseid'");
$num = mysql_num_rows($resInt);
if($num!=0)
{
	$m="<span style='color: red'>Already Registered to the course</span>";
	header('location:enroll_student.php?m1='.$m);
}
else
{
mysql_query("INSERT INTO course_enrolled VALUES ('$sroll','$courseid')");
mysql_query("INSERT INTO attendence VALUES ('$sroll','$courseid','0','0')");
$m="<span style='color: white;'>Added Successfully to the database</span>";
	header('location: enroll_student.php?m1='.$m);
}
?>