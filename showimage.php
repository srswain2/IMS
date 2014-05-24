<?php
	require('dbconf.inc');
	db_connect();
	session_start();
	$username=$_SESSION['username'];
	$qryIns="SELECT roll FROM admin WHERE email='$username'";
	$resInt=mysql_query($qryIns);
	$row = mysql_fetch_array($resInt);
	$roll=$row['roll'];
	
	$query=mysql_query("SELECT * FROM picture WHERE roll='$roll'");
	while($row=mysql_fetch_array($query))
		echo $row['image'];

?>