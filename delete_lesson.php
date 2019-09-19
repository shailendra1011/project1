<?php
include('conn.php');
$id=$_REQUEST['id'];

$sql="delete from lesson where id=".$id;
$result=mysqli_query($conn,$sql);
if($result){
header("Location: view_lesson.php");
exit();
}else
{
echo "error".mysqli_error();
}

?>