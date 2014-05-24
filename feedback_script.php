<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$courseid=mysql_real_escape_string($_GET['courseid']);
$textarea=mysql_real_escape_string($_GET['textarea']);
$qryIns="SELECT * FROM course_enrolled WHERE courseID='$courseid'";
$result=mysql_query("SELECT roll FROM admin WHERE email='$username'");
$resInt=mysql_query($qryIns);
$row = mysql_fetch_array($result);
$num = mysql_num_rows($resInt);
$roll=$row['roll'];
if($num!=0)
{
	$query = "INSERT INTO feedback
	(roll,courseID, feedback)
	VALUES
	('$roll','$courseid','$textarea')";
	mysql_query($query);
	echo "Feedback Sent";
	header('location: feedback_success.php');
}
else
{
	$m = "<span style='color:red'><strong>You have not enrolled in the course you have entered</strong></span>";
	header('location: feedback.php?m1='.$m);
}
?>