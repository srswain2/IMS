<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$roll=mysql_real_escape_string($_GET['roll']);
$room=mysql_real_escape_string($_GET['room']);
$hostel_name=mysql_real_escape_string($_GET['hostel_name']);
$mess_fees=mysql_real_escape_string($_GET['mess_fees']);
$status=mysql_real_escape_string($_GET['status']);
if($roll=='' || $room=='' || $hostel_name==''|| $mess_fees==''|| $status=='')
{
	$m="<span style='color: red;'>Fields Cannot be Empty</span>";
	header('location:hostel_update.php?m1='.$m);
}
else
{
	mysql_query("UPDATE `hostel` SET `hostel_name`='$hostel_name',`room`='$room',`mess_fees`='$mess_fees',`status`='$status' WHERE roll='$roll'");
	$m="<span style='color: white;'>Updated Successfully to the database</span>";
	header('location:hostel_update.php?m1='.$m);
}
?>