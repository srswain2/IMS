<html>
<head>
	<style>
			body{background-image: url(write.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				background:rgba(153,153,153,0.7);
				width:300px;
				height:200px;
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
$qryIns="SELECT * FROM admin ad natural join student_info s natural join hostel h WHERE email='$username'";
$resInt=mysql_query($qryIns);
echo "	<div id='head'>
				<h1>Hostel Information</h1>
			</div>";
$row = mysql_fetch_array($resInt);
	echo "<div id='container'>
			<div id='name'>
				<p>Name: Mr. ".$row['name']."</p>
			</div>
			<div id='hostel'>
				<p>Hostel Name : ".$row['hostel_name']."</p>
			</div>
			<div id='room'>
				<p>Room no.: ".$row['room']."</p>
			</div>
			<div id='fees'>
				<p>Mess Fees: #".$row['mess_fees']."</p>
			</div>
			<div id='status'>
				<p>Status: ".$row['status']."</p>
			</div>
		</div>";
db_close();
?>
</body>
</html>