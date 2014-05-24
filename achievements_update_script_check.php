<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$roll=mysql_real_escape_string($_GET['roll']);
$position=mysql_real_escape_string($_GET['position']);
$event=mysql_real_escape_string($_GET['event']);
if($roll=='' || $event=='')
{
	$m="<span style='color: red;'>Fields Cannot be Empty</span>";
	header('location:achievements_update_script.php?m1='.$m);
}
else
{
	mysql_query("INSERT INTO achievements VALUES ('$roll','$position','$event')");
	$m="<span style='color: white;'>Updated Successfully to the database</span>";
	header('location:achievements_update_script.php?m1='.$m);
}
?>