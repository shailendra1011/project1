<?php 
	include("conn.php");
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$uname=$_POST['name'];
		$mail=$_POST['email'];
		$password=$_POST['password'];
		$sql="INSERT INTO edu (name,email,password) VALUES ('$uname','$mail','$password')";
		if($conn->query($sql)==true)
		{
			header("location: log.php");
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
<h2 align="center">SIGN UP</h2>
<form action="" method="post">
	<table align="center" border="1">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr><td>email</td><td><input type="text" name="email"></td></tr>
		<tr><td>password</td><td><input type="text" name="password"></td></tr>
		<tr><td><input type="submit" name="submit" align="center"></td></tr>
	</table>
</form>

</body>
</html>