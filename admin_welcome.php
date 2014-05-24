<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password']))
{
	header('location: login.php');
}
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
	$username=$_SESSION['username'];
}
error_reporting(0);
?>
<html>
	<head>
		<title>IMS-Welcome</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">
			body{background-image: url(lock.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				width:700px;
				height:150px;
				padding-left:230px;
				padding-top:70px;
			}
			#heading h2{
				font-size: 36px;
				padding-left:45px;
			}
			#heading{
				background-color: rgba(221,221,221,0.6);
				border-radius:10px;
				border-color:#000;
				border-style: double;
				height:108px;
				width:550px;
				margin-left:400px;
				margin-top:40px;
			}
			a:link {
				text-decoration:none;
			}
			#course{
				width:100px;
				height:70px;
				background-color:rgba(153,153,153,0.7);
				margin-left:3px;
				border-radius:10px;
				border-color:#000;
				border-style: double;	
			}
			#courselogo img{
				height:50px;
				padding-left:28px;
			}
			#coursetext p{
				padding-top:0px;
				margin:0px;
				padding-left:25px;
				color: #000;
			}
			#courseenroll{
				width:100px;
				height:70px;
				margin-left:137px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#courseenrolllogo img{
				height:50px;
				padding-left:26px;
			}
			#courseenrolltext p{
				padding-top:0px;
				margin:0px;
				padding-left:9px;
				color:#000;
				width:100px;
			}
			#attendence{
				width:100px;
				height:70px;
				margin-left:269px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#attendencelogo img{
				height:50px;
				padding-left:25px;
			}
			#attendencetext p{
				padding-top:0px;
				margin:0px;
				padding-left:17px;
				color:#000;
			}
			#fees{
				width:100px;
				height:70px;
				margin-left:400px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#feeslogo img{
				height:50px;
				padding-left:25px;
			}
			#feestext p{
				padding-top:0px;
				margin:0px;
				padding-left:35px;
				color:#000;
			}
			#salary{
				width:100px;
				height:70px;
				margin-left:530px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#salarylogo img{
				padding-top:5px;
				padding-left:32px;
				height:40px;
			}
			#salarytext p{
				padding-top:5px;
				padding-left:32px;
				margin:0px;
				color:#000;
			}
			#announce{
				width:100px;
				height:70px;
				margin-left:661px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#announcelogo img{
				height:50px;
				padding-left:26px;
			}
			#announcetext p{
				padding-top:0px;
				margin:0px;
				padding-left:30px;
				color:#000;
			}
			#achievements{
				width:100px;
				height:70px;
				margin-left:790px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#achievementslogo img{
				height:40px;
				padding-left:29px;
				padding-top:5px;
			}
			#achievementstext p{
				padding-top:5px;
				margin:0px;
				padding-left:10px;
				color:#000;
			}
			#setting{
				width:100px;
				height:70px;
				margin-left:475px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#settinglogo img{
				height:45px;
				padding-left:28px;
				padding-top:5px;
			}
			#settingtext p{
				padding-top:0px;
				margin:0px;
				padding-left:27px;
				color:#000;
			}
			#hostel{
				width:100px;
				height:70px;
				margin-left:340px;
				margin-top:50px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#hostellogo img{
				height:45px;
				padding-left:28px;
				padding-top:5px;
			}
			#hosteltext p{
				padding-top:0px;
				margin:0px;
				padding-left:32px;
				color:#000;
			}
			#logout{
				width:100px;
				height:70px;
				margin-left:405px;
				margin-top:56px;
			}
			#logoutlogo img{
				height:70px;
				padding-left:28px;
				padding-top:5px;
			}
			#logouttext p{
				padding-top:0px;
				margin:0px;
				padding-left:27px;
				color:#000;
			}
		</style>
	</head>
<body>
    <div id="heading">
    	<h2 style="color: #000;">Institute Management System</h2>
    </div>
    <div id="container">       
		<div id="course"><a href="update_course.php">
        	<div id="courselogo">
		  		<img src="collection/course-icon.png">
            </div>
            <div id="coursetext">
		    	<p>Courses</p>
            </div></a>
        </div>
        <div id="courseenroll"><a href="course\enroll_course.php?username=<?php echo $username;?>">
        	<div id="courseenrolllogo">
		  		<img src="collection/enroll.png">
            </div>
            <div id="courseenrolltext">
		    	<p>Enroll Course</p>
            </div></a>
        </div>
        <div id="attendence"><a href="attendence_update.php">
        	<div id="attendencelogo">
		  		<img src="collection/attendence.png">
            </div>
            <div id="attendencetext">
		    	<p>Attendence</p>
            </div></a>
        </div>
        <div id="fees"><a href="fees_update.php">
        	<div id="feeslogo">
		  		<img src="collection/money-icon.png">
            </div>
            <div id="feestext">
		    	<p>Fees</p>
            </div></a>
        </div>
        <div id="salary"><a href="salary_update.php">
        	<div id="salarylogo">
		  		<img src="collection/salary.png">
            </div>
            <div id="salarytext">
		    	<p>Salary</p>
            </div></a>
        </div>
        <div id="achievements"><a href="achievements_update.php">
        	<div id="achievementslogo">
		  		<img src="collection/Gold_trophy.png">
            </div>
            <div id="achievementstext">
		    	<p>Achievements</p>
            </div></a>
        </div>
        <div id="announce"><a href="notice.php">
        	<div id="announcelogo">
		  		<img src="collection/announce.png">
            </div>
            <div id="announcetext">
		    	<p>Notice</p>
            </div></a>
        </div>
		<div id="hostel"><a href="hostel_update.php">
        	<div id="hostellogo">
		  		<img src="collection/hostel-clip-art-white-hi.png">
            </div>
            <div id="hosteltext">
		    	<p>Hostel</p>
            </div></a>
        </div>
        <div id="setting"><a href="change_password.php">
        	<div id="settinglogo">
		  		<img src="collection/setting.png">
            </div>
            <div id="settingtext">
		    	<p>Settings</p>
            </div></a>
        </div>
        <div id="logout"><a href="logout.php">
        	<div id="logoutlogo">
		  		<img src="collection/logout-button-md.png">
            </div>
            <div id="logouttext">
            </div></a>
        </div>
    </div>
</body>
</html>