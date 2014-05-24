<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$roll=mysql_real_escape_string($_GET['roll']);
$amount=mysql_real_escape_string($_GET['amount']);
$fine=mysql_real_escape_string($_GET['fine']);
$status=mysql_real_escape_string($_GET['status']);
$resInt=mysql_query("SELECT * FROM fees WHERE roll='$roll'");
$num = mysql_num_rows($resInt);
if($num==0)
{
	$m="<span style='color: red'>Roll No. Not Registered</span>";
	header('location:fees_update_individual.php?m1='.$m);
}
else
{
	mysql_query("UPDATE fees SET amount='$amount',status='$status',fine='$fine' WHERE roll='$roll'");
	$m="<span style='color: white;'>Updated Successfully to the database</span>";
	header('location: fees_update_individual.php?m1='.$m);
}
?>