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
			body{background-image: url(lecture.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				width:700px;
				height:150px;
				padding-left:290px;
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
			#setting{
				width:80px;
				height:70px;
				margin-left:672px;
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
				margin-left:345px;
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
			#search{
				width:165px;
				height:50px;
				margin-left:575px;
				margin-top:150px;
				padding-left:30px;
				padding-top:15px;
				background-color:rgba(225,225,225,0.4);
				border-radius:20px;
				border-style:double;
			}
			#search img{
				height:30px;
			}
			#search p{
				margin-top:-25px;
				margin-left:40px;
			}
		</style>
	</head>
<body>
    <div id="heading">
    	<h2 style="color: #000;">Institute Management System</h2>
    </div>
    <div id="container">       
		<div id="home"><a href="faculty_welcome.php">
        	<div id="homelogo">
		  		<img src="collection/Home.png">
            </div>
            <div id="hometext">
		    	<p>Home</p>
            </div></a>
        </div>
        <div id="profile"><a href="profile_faculty.php?username=<?php echo $username;?>">
        	<div id="profilelogo">
		  		<img src="collection/user.png">
            </div>
            <div id="profiletext">
		    	<p>Profile</p>
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
        <div id="fees"><a href="salary.php">
        	<div id="feeslogo">
		  		<img src="collection/money-icon.png">
            </div>
            <div id="feestext">
		    	<p>Salary</p>
            </div></a>
        </div>
        <div id="feedback"><a href="feedback_show.php">
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
	<div id="search">
		<a href="search_student.php" style="color:#000"><img src="collection\Search.png">
		<p>Search Students</p></a>
	</div>
</body>
</html>