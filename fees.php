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
$qryIns="SELECT name, amount, fine, amount-fine 'total', status FROM admin ad natural join student_info s natural join fees f WHERE email='$username'";
$resInt=mysql_query($qryIns);
echo "	<div id='head'>
				<h1>Payment Information</h1>
			</div>";
$row = mysql_fetch_array($resInt);
	echo "<div id='container'>
			<div id='name'>
				<p>Name: Mr. ".$row['name']."</p>
			</div>
			<div id='amount'>
				<p>Amount : #".$row['amount']."</p>
			</div>
			<div id='fine'>
				<p>Fine: #".$row['fine']."</p>
			</div>
			<div id='total'>
				<p>Net Amount: #".$row['total']."</p>
			</div>
			<div id='status'>
				<p>Status: ".$row['status']."</p>
			</div>
		</div>";
db_close();
?>
</body>
</html>