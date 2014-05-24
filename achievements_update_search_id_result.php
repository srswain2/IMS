<html>
<head>
	<style>
		body{background-image: url(lock.jpg); background-size:cover; background-repeat:no-repeat;}
		#container{
			border-style:double;
			border-radius:10px;
			background-color:rgba(153,153,153,0.7);
			width:400px;
			height:110px;
			padding-left:10px;
			padding-top:0px;
			padding-bottom:0px;
			margin-top:20px;
			margin-left:480px;
		}
		#container p{
			color:#000;
		}
	</style>
</head>
</html>

<?php

require('dbconf.inc');

db_connect();
//create a query	
session_start();
$username=$_SESSION['username'];
$roll=mysql_real_escape_string($_GET['roll']);
$qryIns="SELECT * FROM achievements a natural join student_info s WHERE a.roll='$roll'";
$resInt=mysql_query($qryIns);

$num = mysql_num_rows($resInt);
if($num==0)
{
	$m="<span style='color: red'>Not Found in the Database OR No Achievements</span>";
	header('location:achievements_update_search_id.php?m1='.$m);
}
	while($row = mysql_fetch_array($resInt))
	{
		echo "<div id='container'><p>Roll No.:- ".$row['roll']."<br>
		Student Name:- ".$row['name']."<br>
		Position:- ".$row['position']."<br>
		Event:- ".$row['event']."</p><br></div>";
	}
?>