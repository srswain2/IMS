<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$fid=mysql_real_escape_string($_GET['fid']);
$basic=mysql_real_escape_string($_GET['basic']);
$bonus=mysql_real_escape_string($_GET['bonus']);
$resInt=mysql_query("SELECT * FROM salary WHERE roll='$fid'");
$num = mysql_num_rows($resInt);
if($num==0)
{
	$m="<span style='color: red'>Faculty ID Not Found...Check Again</span>";
	header('location:salary_update.php?m1='.$m);
}
else
{
	mysql_query("UPDATE salary SET basic='$basic',bonus='$bonus' WHERE roll='$fid'");
	$m="<span style='color: white;'>Updated Successfully to the database</span>";
	header('location:salary_update.php?m1='.$m);
}
?>