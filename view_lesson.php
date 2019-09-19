<?php 
	include("conn.php");
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$lesson=$_POST['name'];
		$sql="INSERT INTO lesson (lesson_name) VALUES ('$lesson')";
		if($conn->query($sql)==true)
		{
			header("location: view_lesson.php");
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
<form action="" method="POST">
<h2 align="center">Add LESSON</h2>
<table align="center" border="1">
	<tr><td>Lesson name</td><td><input type="text" name="name"></td></tr>
	<tr><td><input type="Submit" name="Submit" align="center"></td></tr>
	</form>
</table><br><br><br><br>

</body>
</html>

<?php 
	include("conn.php");
	$sql="SELECT * from lesson";
	$data=mysqli_query($conn,$sql);
?>
<h2 align="center">MANAGE LESSON</h2>
<table align="center" border="1">
	<th>lesson name</th>
	<th>Action</th>
<?php 
	while($row=mysqli_fetch_array($data))
	{
		?>
		<tr>
	<td><?=$row['lesson_name']?></td>
	<td><a href=delete_lesson.php?id=<?=$row['id']?>>Delete</a></td>
	<td><a href=edit_lesson.php?id=<?=$row['id']?>>Edit</a></td>
		<?php
	}
?>