
<?php
include "db.php";
?>

<?php
function showAllData(){
global $connection;
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if(!$result)
{
	die('query failed'.mysqli_error($connection)); 
}
while($row =mysqli_fetch_assoc($result))
{
	$id =$row['id'];
	echo "<option value='$id'>$id</option>";
}
}
?>

<?php
	function updateTable()
	{
		global $connection;
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id=$_POST['id'];
	$query="UPDATE users SET ";
	$query.="username='$username',";
	$query.="password='$password'";
	$query.="WHERE id=$id";
	$result=mysqli_query($connection,$query);
	if(!$result)
	{
		die("query failed".mysqli_error($connection));
	}
	}
?>
<?php
   function deleteRows()
	{
		global $connection;
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id=$_POST['id'];
	$query="DELETE from users ";
	$query.="WHERE id=$id";
	$result=mysqli_query($connection,$query);
	if(!$result)
	{
		die("query failed".mysqli_error($connection));
	}
	}
?>