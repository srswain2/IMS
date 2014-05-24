<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$roll=mysql_real_escape_string($_GET['roll']);
$qryIns="SELECT * FROM student_info s WHERE s.roll='$roll'";
$resInt=mysql_query($qryIns);
$row = mysql_fetch_array($resInt);
$num = mysql_num_rows($resInt);
if($num!=0)
{
	$m="Name:- ".$row['name']."<br>
		Roll No.:- ".$row['roll']."<br>
		Programme:- ".$row['program']."<br>
		Department.:- ".$row['dept']."<br>
		Mobile No.:- ".$row['mno']."<br>";
	header('location:search_student.php?m1='.$m);
}
else
{
	$m = "<span style='color:red'><strong>Course ID not found</strong></span>";
	header('location:search_student.php?m1='.$m);
}
?>