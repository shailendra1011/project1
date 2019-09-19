<?php 
	include("conn.php");
	$sql="SELECT * from course";
	$data=mysqli_query($conn,$sql);
?>
<h2 align="center">MANAGE COURSES</h2>
<table align="center" border="1">
	<th>course name</th>
	<th>Action</th>
<?php 
	while($row=mysqli_fetch_array($data))
	{
		?>
		<tr>
	<td><?=$row['course_name']?></td>
	<td><a href=delete.php?id=<?=$row['id']?>>Delete</a></td>
	<td><a href=edit.php?id=<?=$row['id']?>>Edit</a></td>
	<td><a href=view_lesson.php?id=<?=$row['id']?>>view</a></td>
		<?php
	}
?>