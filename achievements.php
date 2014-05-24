<html>
<head>
	<style>
			body{background-image: url(write.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				background:rgba(153,153,153,0.7);
				width:350px;
				height:130px;
				padding-left:20px;
				padding-top:1px;
				border-radius:10px;
				margin-top:50px;
				margin-left:480px;
				border-style:double;
			}
			#head h1{
				padding-left:570px;
				padding-top:20px;
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
$qryIns="SELECT * FROM admin natural join student_info natural join achievements WHERE email='$username'";
$resInt=mysql_query($qryIns);
echo "	<div id='head'>
				<h1>Achievements</h1>
			</div>";
while($row = mysql_fetch_array($resInt))
{
	echo "<div id='container'>
			<div id='name'>
				<p>Name: Mr. ".$row['name']."</p>
			</div>
			<div id='position'>
				<p>Position : ".$row['position']."</p>
			</div>
			<div id='event'>
				<p>Event: ".$row['event']."</p>
			</div>
		</div>";
}
db_close();
?>
</body>
</html>