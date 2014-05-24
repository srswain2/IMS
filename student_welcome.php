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
			body{background-image: url(write.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				width:700px;
				height:150px;
				padding-left:300px;
				padding-top:90px;
			}
			#heading h2{
				font-size: 36px;
				padding-top:50px;
				padding-left:430px;
			}
			a:link {
				text-decoration:none;
			}
			#home{
				width:80px;
				height:70px;
				background-color:rgba(153,153,153,0.7);
				margin-left:3px;
				border-radius:10px;
				border-color:#000;
				border-style: double;	
			}
			#homelogo img{
				height:50px;
				padding-left:15px;
			}
			#hometext p{
				padding-top:0px;
				margin:0px;
				padding-left:20px;
				color: #000;
			}
			#profile{
				width:80px;
				height:70px;
				margin-left:117px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#profilelogo img{
				height:50px;
				padding-left:15px;
			}
			#profiletext p{
				padding-top:0px;
				margin:0px;
				padding-left:20px;
				color:#000;
			}
			#faculty{
				width:80px;
				height:70px;
				margin-left:229px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#facultylogo img{
				height:50px;
				padding-left:15px;
			}
			#facultytext p{
				padding-top:0px;
				margin:0px;
				padding-left:4px;
				color:#000;
			}
			#attendence{
				width:80px;
				height:70px;
				margin-left:340px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#attendencelogo img{
				height:50px;
				padding-left:14px;
			}
			#attendencetext p{
				padding-top:0px;
				margin:0px;
				padding-left:5px;
				color:#000;
			}
			#timetable{
				width:80px;
				height:70px;
				margin-left:450px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#timetablelogo img{
				padding-top:5px;
				padding-left:20px;
				height:40px;
			}
			#timetabletext p{
				padding-top:5px;
				padding-left:8px;
				margin:0px;
				color:#000;
			}
			#fees{
				width:80px;
				height:70px;
				margin-left:560px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#feeslogo img{
				height:50px;
				padding-left:13px;
			}
			#feestext p{
				padding-top:0px;
				margin:0px;
				padding-left:23px;
				color:#000;
			}
			#exam{
				width:80px;
				height:70px;
				margin-left:670px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#examlogo img{
				height:40px;
				padding-left:21px;
				padding-top:5px;
			}
			#examtext p{
				padding-top:5px;
				margin:0px;
				padding-left:20px;
				color:#000;
			}
			#achieve{
				width:80px;
				height:70px;
				margin-left:119px;
				margin-top:70px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#achievelogo img{
				height:50px;
				padding-left:15px;
			}
			#achievetext p{
				padding-top:0px;
				margin:0px;
				padding-left:13px;
				color:#000;
			}
			#feedback{
				width:80px;
				height:70px;
				margin-left:230px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#feedbacklogo img{
				height:50px;
				padding-left:15px;
			}
			#feedbacktext p{
				padding-top:0px;
				margin:0px;
				padding-left:10px;
				color:#000;
			}
			#announce{
				width:80px;
				height:70px;
				margin-left:341px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#announcelogo img{
				height:50px;
				padding-left:16px;
			}
			#announcetext p{
				padding-top:0px;
				margin:0px;
				padding-left:20px;
				color:#000;
			}
			#hostel{
				width:80px;
				height:70px;
				margin-left:451px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#hostellogo img{
				height:40px;
				padding-left:20px;
				padding-top:5px;	
			}
			#hosteltext p{
				padding-top:5px;
				margin:0px;
				padding-left:21px;
				color:#000;
			}
			#setting{
				width:80px;
				height:70px;
				margin-left:562px;
				margin-top:-76px;
				background-color:rgba(153,153,153,0.7);
				border-radius:10px;
				border-style: double;
			}
			#settinglogo img{
				height:45px;
				padding-left:18px;
				padding-top:5px;
			}
			#settingtext p{
				padding-top:0px;
				margin:0px;
				padding-left:17px;
				color:#000;
			}
			#logout{
				width:75px;
				height:30px;
				margin-left:340px;
				margin-top:70px;
			}
			#logoutlogo img{
				height:70px;
				padding-left:5px;
			}
			#logouttext p{
				padding-top:0px;
				margin:0px;
				padding-left:20px;
				color:#000;
			}
		</style>
	</head>
<body>
    <div id="heading">
    	<h2 style="color: #EEE;">Institute Management System</h2>
    </div>
    <div id="container">       
		<div id="home"><a href="#">
        	<div id="homelogo">
		  		<img src="collection/Home.png">
            </div>
            <div id="hometext">
		    	<p>Home</p>
            </div></a>
        </div>
        <div id="profile"><a href="profile_student.php?username=<?php echo $username;?>">
        	<div id="profilelogo">
		  		<img src="collection/user.png">
            </div>
            <div id="profiletext">
		    	<p>Profile</p>
            </div></a>
        </div>
        <div id="faculty"><a href="faculty_info.php">
        	<div id="facultylogo">
		  		<img src="collection/Supervisor-icon.png">
            </div>
            <div id="facultytext">
		    	<p>Faculty Info</p>
            </div></a>
        </div>
        <div id="attendence"><a href="attendence.php">
        	<div id="attendencelogo">
		  		<img src="collection/attendence.png">
            </div>
            <div id="attendencetext">
		    	<p>Attendence</p>
            </div></a>
        </div>
        <div id="timetable"><a href="timetable.php">
        	<div id="timetablelogo">
		  		<img src="collection/time-management.gif">
            </div>
            <div id="timetabletext">
		    	<p>TimeTable</p>
            </div></a>
        </div>
        <div id="fees"><a href="fees.php">
        	<div id="feeslogo">
		  		<img src="collection/money-icon.png">
            </div>
            <div id="feestext">
		    	<p>Fees</p>
            </div></a>
        </div>
        <div id="exam"><a href="exams.php">
        	<div id="examlogo">
		  		<img src="collection/Test-paper-512.png">
            </div>
            <div id="examtext">
		    	<p>Exams</p>
            </div></a>
        </div>
        <div id="achieve"><a href="achievements.php">
        	<div id="achievelogo">
		  		<img src="collection/Gold_trophy.png">
            </div>
            <div id="achievetext">
		    	<p>Trophies</p>
            </div></a>
        </div>
        <div id="feedback"><a href="feedback.php">
        	<div id="feedbacklogo">
		  		<img src="collection/feedback-icon.png">
            </div>
            <div id="feedbacktext">
		    	<p>Feedback</p>
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
        <div id="hostel"><a href="hostel.php">
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