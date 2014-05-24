<html>
<head>
	<style>
			body{background-image: url(write.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				background:rgba(153,153,153,0.7);
				width:300px;
				height:190px;
				padding-left:20px;
				padding-top:1px;
				border-radius:10px;
				margin-top:20px;
				margin-left:520px;
				border-style:double;
			}
			#head h1{
				padding-left:515px;
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
$qryIns="SELECT *, class-present 'absent' FROM admin ad natural join student_info s natural join attendence a WHERE email='$username'";
$resInt=mysql_query($qryIns);
echo "	<div id='head'>
				<h1>Attendence Information</h1>
			</div>";
while($row = mysql_fetch_array($resInt))
{
	echo "<div id='container'>
			<div id='name'>
				<p>Name: Mr. ".$row['name']."</p>
			</div>
			<div id='courseid'>
				<p>Course ID: ".$row['courseID']."</p>
			</div>
			<div id='class'>
				<p>Total Classes : ".$row['class']."</p>
			</div>
			<div id='present'>
				<p>Total Classes Attended: ".$row['present']."</p>
			</div>
			<div id='absent'>
				<p>Total Absent: ".$row['absent']."</p>
			</div>
		</div>";
}
db_close();
?>
</body>
</html>