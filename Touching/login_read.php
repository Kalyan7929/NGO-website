<?php
 include "db.php";
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if(!$result)
{
	die('query failed'.mysqli_error($connection)); 
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
			<?php
			while($row=mysqli_fetch_assoc($result)){
				?>
				<pre>
					<?php
					print_r($row);
					?>
				</pre>
				<?php
				
			}
			/*can use _assoc to get associative array*/
			?>
		</div>
	</div>
</body>
</html>