<?php

$dbServer='localhost';
	$dbName='loginform';
	$dbUser='root';
	$dbPwd='root';
	
	$dbCon=mysql_connect($dbServer,$dbUser,$dbPwd) or die('Could not connect to the database'.mysql_error());
	mysql_select_db($dbName,$dbCon);

$first = $_POST['first'];
$first = mysql_real_escape_string($first);
$first = strip_tags($first);

$last = $_POST['last'];
$last = mysql_real_escape_string($last);
$last = strip_tags($last);

$email = $_POST['email'];
$email = mysql_real_escape_string($email);
$email = strip_tags($email);

$npass = $_POST['npass'];
$npass = mysql_real_escape_string($npass);
$npass = strip_tags($npass);

$npass1 = $_POST['npass1'];
$npass1 = mysql_real_escape_string($npass1);
$npass1 = strip_tags($npass1);

$roll = $_POST['roll'];
$roll = mysql_real_escape_string($roll);
$roll = strip_tags($roll);

$address = $_POST['address'];
$address = mysql_real_escape_string($address);
$address = strip_tags($address);

$occupation = $_POST['radios'];

$name=$first." ".$last;

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[1-9][0-9]{2}[a-zA-Z]{2}[0-9]{4}$/";
$query = "SELECT * FROM admin WHERE email='$email'";
$result = mysql_query($query);
$num = mysql_num_rows($result);

if ($num != 0)
	{
	$m = "<span style='color:red;'>Email Already Exists</span>";
	header('location: signup.php?m3='.$m);
	}
else if (!preg_match("/^[a-zA-Z ]*$/",$first))
	{
		$m = "<span style='color:red'>Enter name properly</span>";
		header('location: signup.php?m1='.$m);
	}
else if (!preg_match("/^[a-zA-Z ]*$/",$last))
	{
		$m = "<span style='color:red'>Enter name properly</span>";
		header('location: signup.php?m2='.$m);
	}
else if (!preg_match($regex_email, $email))
	{
	$m = "<span style='color: red;'>Not a valid Email Id</span>";
	header('location: signup.php?m3='.$m);
	}
else if (!preg_match($regex_num, $roll))
	{
	$m = "<span style='color: red; margin-left:5px; padding-top:-5px;'>Not a valid roll</span>";
	header('location: signup.php?m4='.$m);
	}
else if (strlen($npass)<6)
	{
	$m = "<span style='color: red;'>Password too short</span>";
	header('location: signup.php?m5='.$m);
	}
else if ($npass!=$npass1)
	{
	$m = "<span style='color: red;'>Password didn't match</span>";
	header('location: signup.php?m6='.$m);
	}
else
	{
		if($occupation=="faculty")
		{
			$query = "INSERT INTO admin(first, last, email, roll, occupation, address, password)
			VALUES
			('$first','$last','$email','$roll','$occupation','$address','$npass')";
			mysql_query($query);
			mysql_query("INSERT INTO faculty_detail VALUES ('$roll','','','')");
			mysql_query("INSERT INTO faculty_info VALUES ('$roll','$name','','')");
			mysql_query("INSERT INTO picture VALUES ('$roll','','')");
			mysql_query("INSERT INTO salary VALUES ('$roll','','')");
			header('location: signup_success.php');
		}
		else
		{
			$query = "INSERT INTO admin(first, last, email, roll, occupation, address, password)
			VALUES
			('$first','$last','$email','$roll','$occupation','$address','$npass')";
			mysql_query($query);
			mysql_query("INSERT INTO fees VALUES ('$roll','','','')");
			mysql_query("INSERT INTO hostel VALUES ('$roll','$address','','','')");
			mysql_query("INSERT INTO picture VALUES ('$roll','','')");
			mysql_query("INSERT INTO student_info VALUES ('$name','','','$roll','','','','','')");
			header('location: signup_success.php');
		}
	}
	

	
?>