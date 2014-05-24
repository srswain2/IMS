<?php

require('dbconf.inc');

db_connect();
//create a query	
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$occ = $_POST['radios'];
if($occ=="admin" && $username=="admin@gmail.com" && $password=="ims123")
{
	session_start();
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	$_SESSION['occupation']=$occ;
	header('location:admin_welcome.php');
}
else
{
	$qryIns="SELECT * FROM admin WHERE email='$username' AND password='$password' AND occupation='$occ'";
	$resInt=mysql_query($qryIns);

	$num = mysql_num_rows($resInt);
	$checkfaculty="faculty";
	$checkstudent="student";
	if($num == 1)
	{
		$row=mysql_fetch_array($resInt);
		if($row['occupation']==$checkstudent)
		{
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			$_SESSION['occupation']=$occ;
			header('location: student_welcome.php');
		}
		else if($row['occupation']==$checkfaculty)
		{
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			$_SESSION['occupation']=$occ;
			header('location: faculty_welcome.php');
		}
	}
	else
	{
		$m = "<span style='color:red'><strong>Incorrect Username OR Password OR Select Proper Button</strong></span>";
		header('location: login.php?m1='.$m);
	}
}
?>