<?php
include('conn.php');
$id=$_GET['id'];
$qry="select * from course where id=$id";
$data=mysqli_query($conn,$qry);
$row=mysqli_fetch_array($data);
?>

<html>
<body><h2 align="center">Edit Course</h2>
<form method="POST" ><table align="center">
<tr><td><input type="text" name="name" value=<?php echo $row['course_name'];?>></td>
<td><input type="submit" value="update"></td></tr>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=$_POST['name'];
	
	$qry="update course set course_name='$name' where id=$id";
	$data=mysqli_query($conn,$qry);
	if($data)
	{
		header("location:show.php");
	}
}
?>