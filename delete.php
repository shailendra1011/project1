<?php
include('conn.php');
$id=$_REQUEST['id'];

$sql="delete from course where id=".$id;
$result=mysqli_query($conn,$sql);
if($result){
header("Location: show.php");
exit();
}else
{
echo "error".mysqli_error();
}

?>