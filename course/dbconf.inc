<?php
function db_connect(){
	//database server information
	
	$dbServer='localhost';
	$dbName='loginform';
	$dbUser='root';
	$dbPwd='root';
	
	$dbCon=mysql_connect($dbServer,$dbUser,$dbPwd) or die('Could not connect to the database'.mysql_error());
	mysql_select_db($dbName,$dbCon);
	
}

function db_close(){
	mysql_close();
}
?>