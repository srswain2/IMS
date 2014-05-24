<?php

if(isset($_POST['submit']))
{
	require('dbconf.inc');
	db_connect();
	session_start();
	$username=$_SESSION['username'];
	$qryIns="SELECT roll FROM admin WHERE email='$username'";
	$resInt=mysql_query($qryIns);
	$row = mysql_fetch_array($resInt);
	$roll=$row['roll'];
	$imageName=mysql_real_escape_string($_FILES["image"]["name"]);
	$imageData=mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
	$imageType=mysql_real_escape_string($_FILES["image"]["type"]);
	
	if(substr($imageType,0,5)=="image")
	{
		mysql_query("UPDATE picture SET image='$imageData' WHERE roll='$roll'");
		echo "Image Uploaded";
	}
	else
	{	
		echo "Only images are allowed";
	}
}
?>