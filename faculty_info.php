<html>
<head>
	<style>
			body{background-image: url(write.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				background:rgba(153,153,153,0.7);
				width:300px;
				height:150px;
				padding-left:20px;
				padding-top:1px;
				border-radius:10px;
				margin-top:20px;
				margin-left:520px;
				border-style:double;
			}
			#head h1{
				padding-left:545px;
				color:#FFF;
			}
	</style>
</head>
<body>
<?php

require('dbconf.inc');
db_connect();
session_start();
$username=$_SESSION['username'];
$qryIns="SELECT * FROM faculty_detail f natural join faculty_info fi WHERE f.roll like '100%' AND fi.roll like '100%'";
$resInt=mysql_query($qryIns);

$num = mysql_num_rows($resInt);
echo "	<div id='head'>
				<h1>Faculty Information</h1>
			</div>";
while($row = mysql_fetch_array($resInt))
{
	echo "<div id='container'>
			<div id='name'>
				<p>Name: Prof. ".$row['name']."</p>
			</div>
			<div id='designation'>
				<p>Designation: ".$row['designation']."</p>
			</div>
			<div id='degree'>
				<p>Degrees: ".$row['degree']."</p>
		</div>
			<div id='mno'>
				<p>Contact: ".$row['mno']."</p>
		</div>
		</div>";
}
db_close();
?>
</body>
</html>