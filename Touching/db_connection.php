<?php
include "db.php";
if (isset($_POST['submit'])) {
$username=$_POST['username'];
$password=$_POST['password'];
$query="insert into users(username,password)";
$query.="values('$username','$password')";
$result=mysqli_query($connection,$query);
if(!$result)
{
	die('query failed'.mysqli_error($connection)); 
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	Login Page		
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="col-sm-6">
			<form action="db_connection.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form>
		</div>
	</div>
</body>
</html>