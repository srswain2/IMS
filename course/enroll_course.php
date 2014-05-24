<html>
  
	<head>
		<title>Institute Management System</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">
			body{background-image: url(lock.jpg); background-size:cover; background-repeat:no-repeat;}
			#container{
				padding-left:100px;
				padding-top:10px;
			}
			#search{
				background-color:rgba(153,153,153,0.7);
				width:250px;
				height:120px;
				border-radius:10px;
				margin-top:60px;
				margin-left:300px;
				border-style:double;
			}
			#new{
				background-color:rgba(153,153,153,0.7);
				width:250px;
				height:120px;
				border-radius:10px;
				margin-top:-126px;
				margin-left:600px;
				border-style:double;
			}
		</style>
	</head>

<body>
	
    <div id="heading">
    	<h1 style="color: #FFF; padding-left:520px;margin-top:50px; font-size:50px">Enroll Courses</h1>
    </div>
	<div id="container">
		<div id="search">
			<h1 style="padding-left:88px;padding-top:2px;font-size:25px">Search</h1>
			<a href="enroll_course_search_id.php" style="padding-left:62px;padding-top:-10px; text-decoration:none">Search by CourseID</a>
			<a href="enroll_course_search_name.php" style="text-decoration:none; padding-left:50px">Search by Student Name</a>
		</div>
		
		<div id="new">
			<h1 style="padding-left:60px;padding-top:2px;font-size:25px">Enroll Student</h1>
			<a href="enroll_student.php" style="text-decoration:none;  padding-left:95px">Click here</a>
			<p style="padding-left:50px;margin-top:0px; width:250px">to insert into the database</p>
			
		</div>
	</div>
</body>
</html> 