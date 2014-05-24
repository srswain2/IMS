<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$amount=mysql_real_escape_string($_GET['amount']);
$status=mysql_real_escape_string($_GET['status']);

mysql_query("UPDATE fees SET amount='$amount',status='$status',fine='0'");
$m="<span style='color: white;'>Updated Successfully to the database</span>";
	header('location: fees_update_common.php?m1='.$m);
?>