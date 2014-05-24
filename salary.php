<html>
<head>
	<style>
			body{background-image: url(write.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				background:rgba(153,153,153,0.7);
				width:300px;
				height:160px;
				padding-left:20px;
				padding-top:1px;
				border-radius:10px;
				margin-top:20px;
				margin-left:500px;
				border-style:double;
			}
			#head h1{
				padding-left:610px;
				color:#FFF;
				margin-top:60px;
			}
	</style>
</head>
<body>
<?php

require('dbconf.inc');
db_connect();
session_start();
$username=$_SESSION['username'];
$qryIns="SELECT name, basic, bonus, basic+bonus 'total' FROM admin ad natural join salary s natural join faculty_info WHERE ad.email='$username'";
$resInt=mysql_query($qryIns);
echo "	<div id='head'>
				<h1>Salary</h1>
			</div>";
$row = mysql_fetch_array($resInt);
	echo "<div id='container'>
			<div id='name'>
				<p>Name: Prof. ".$row['name']."</p>
			</div>
			<div id='basic'>
				<p>Basic : #".$row['basic']."</p>
			</div>
			<div id='bonus'>
				<p>Bonus: #".$row['bonus']."</p>
			</div>
			<div id='total'>
				<p>Gross Salary: #".$row['total']."</p>
			</div>
		</div>";
db_close();
?>
</body>
</html>