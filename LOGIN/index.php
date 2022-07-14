<?php 
	if(isset($_GET['sukses'])){
		if($_GET['sukses']=='0')
			$status = 'LOGIN GAGAL';
	}
	else{
		$status = '';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?= $status?>
<div class="container p-5">
	<div class="shadow-lg p-1 mb bg-white rounded mx-auto" style="width: 25rem;">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWJzUcemfSczozS9Y_zA4tqv4zLe6kRiZiyg&usqp=CAU" class="card-img-top" alt="...">
			<div class="card-body">

				<h3 class="text-center">LOGIN</h3>
				<form action="login_proc.php" method="POST">
					<div class="col p-1">
						<h6>Username</h6>
						<input type="text" class="form-control"  name="username" placeholder="username">
					</div>

					<div class="col p-1">
						<h6>Password</h6>
						<input type="password" class="form-control" name="passwd" placeholder="passwd">
						<br>
						
	<input type="submit" name="submit" id="submit" value="Login" class="btn btn-primary">
					</div>
				</form>
				<br>
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<br>
				</div>
			</div>
	</div>
</div>
</body>
</html>
<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
</head>
<body>
	//<?= $status?>
<h3>Login</h3>
<form action="login_proc.php" method="post">
	username <input type="text" name="username" id="username"><br>
	password <input type="password" name="passwd" id="passwd"><br>
	<input type="submit" name="submit" id="submit" value="Login">
</form>
</body>
</html>-->