<html>
<head>
	<style>
			body{background-image: url(lock.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				background:rgba(153,153,153,0.7);
				width:400px;
				height:160px;
				padding-left:20px;
				padding-top:1px;
				border-radius:10px;
				margin-top:50px;
				margin-left:450px;
				border-style:double;
			}
			#head h1{
				padding-left:460px;
				padding-top:50px;
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
$qryIns="SELECT * FROM admin WHERE email='$username'";
$resInt=mysql_query($qryIns);

$num = mysql_num_rows($resInt);
$row1 = mysql_fetch_array($resInt);

$result=mysql_query("SELECT *, basic+bonus 'total' FROM salary s natural join faculty_info f");
echo "	<div id='head'>
				<h1>Salary Details of All Faculties</h1>
		</div>";
while($row=mysql_fetch_array($result))
{
echo "	<div id='container'>
			<div id='name'>
				<p>Name: Prof. ".$row['name']."</p>
			</div>
			<div id='basic'>
				<p>Basic Salary: #".$row['basic']."</p>
			</div>
			<div id='bonus'>
				<p>Bonus: #".$row['bonus']."</p>
			</div>
			<div id='total'>
				<p>Gross Salary: #".$row['total']."</p>
			</div>
		</div>";
}
db_close();
?>
</body>
</html>