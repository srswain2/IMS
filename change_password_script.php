<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$oldpassword=mysql_real_escape_string($_POST['opass']);
$oldpassword= mysql_real_escape_string($oldpassword);
$oldpassword= strip_tags($oldpassword);

$newpassword=mysql_real_escape_string($_POST['npass']);
$newpassword= mysql_real_escape_string($newpassword);
$newpassword= strip_tags($newpassword);

$renewpassword=mysql_real_escape_string($_POST['rnpass']);
$renewpassword= mysql_real_escape_string($renewpassword);
$renewpassword= strip_tags($renewpassword);

$qryIns="SELECT password, roll FROM admin WHERE password='$oldpassword'";
$resInt=mysql_query($qryIns);
$row = mysql_fetch_array($resInt);
$num = mysql_num_rows($resInt);
$roll=$row['roll'];
if($num == 1)
{
	if($newpassword==$renewpassword)
	{
		$query = "UPDATE `admin` SET `password`='$newpassword' WHERE roll='$roll'";
		mysql_query($query);
		header('location: password_change_success.php');
	}
	else
	{
		$m = "<span style='color:red'><strong>Password do not match</strong></span>";
		header('location: change_password.php?m1='.$m);
	}
}
else
{
	$m = "<span style='color:red'><strong>Password is incorrect</strong></span>";
	header('location: change_password.php?m1='.$m);
}
?>