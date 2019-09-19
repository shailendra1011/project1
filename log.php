<?php 
	include("conn.php");
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$email=$_POST['mail'];
		$password=$_POST['password'];
		$sql="SELECT * from edu WHERE email='$email' and password='$password'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		$count=mysqli_num_rows($result);
		if($count==1)
		{
			header("location: view.php");
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2 align="center">LOG IN</h2>
	<form action="" method="post">
	<table align="center" border="1">
		<tr><td>Email</td><td><input type="text" name="mail"></td></tr>
		<tr><td>password</td><td><input type="text" name="password"></td></tr>
		<tr><td><input type="Submit" value="Login"></td></tr>
		</form>
	</table>

</body>
</html>