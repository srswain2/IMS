<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$courseid=mysql_real_escape_string($_GET['courseid']);
$coursename=mysql_real_escape_string($_GET['coursename']);
$fid=mysql_real_escape_string($_GET['fid']);
mysql_query("INSERT INTO course VALUES ('$courseid','$coursename','$fid')");
$m="<span style='color: white;'>Added Successfully to the database</span>";
	header('location: insert_new_course.php?m1='.$m);
?>