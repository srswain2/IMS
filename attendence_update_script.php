<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$roll=mysql_real_escape_string($_GET['roll']);
$courseid=mysql_real_escape_string($_GET['courseid']);
$totalclass=mysql_real_escape_string($_GET['totalclass']);
$totalpresent=mysql_real_escape_string($_GET['totalpresent']);
$resInt=mysql_query("SELECT * FROM course_enrolled WHERE roll='$roll' AND courseID='$courseid'");
$num = mysql_num_rows($resInt);
if($num==0)
{
	$m="<span style='color: red'>Not Registered to the course</span>";
	header('location:attendence_update.php?m1='.$m);
}
else
{
mysql_query("UPDATE attendence SET class='$totalclass',present='$totalpresent' WHERE roll='$roll' AND courseid='$courseid'");
$m="<span style='color: white;'>Updated Successfully to the database</span>";
	header('location: attendence_update.php?m1='.$m);
}
?>