<?php 
	include("conn.php");
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$Course=$_POST['name'];
		$sql="INSERT INTO course (course_name) VALUES ('$Course')";
		if($conn->query($sql)==true)
		{
			header("location: show.php");
		}else{
			$error="invalid";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2 align="center">CREATE COURSE</h2>
<form action="" method="POST">
<h2 align="center">Add Course</h2>
<table align="center" border="1">
	<tr><td>Course name</td><td><input type="text" name="name"></td></tr>
	<tr><td><input type="Submit" name="Submit" align="center"></td></tr>
	</form>
</table>

</body>
</html>