<?php session_start(); ?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Register - SIPEGA</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if($user == "" || $pass == "" || $name == "" || $email == "") {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
	} else {
		mysqli_query($mysqli, "INSERT INTO pemesan(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
			or die("Could not execute the insert query.");
			
		echo "Registration successfully";
		echo "<br/>";
		echo "<a href='login.php'>Login</a>";
	}
} else {
?>
	<form name="form1" method="post" class="form-signin" action="">
		<h5>Registrasi User</h5>
		<div class="form-group">
			<label for="staticEmail" class="col-form-label">Nama Lengkap</label>
			<input type="text" class="form-control" name="name">
		</div>
		<div class="form-group">
			<label for="staticEmail" class="col-form-label">Email</label>
			<input type="email" class="form-control" name="email">
		</div>
		<div class="form-group">
			<label for="staticEmail" class="col-form-label">Username</label>
			<input type="text" class="form-control" name="username">
		</div>
		<div class="form-group">
			<label for="staticEmail" class="col-form-label">Password</label>
			<input type="password" class="form-control" name="password">
		</div>
		<center>
			<input type="submit" name="submit" value="Register" class="btn btn-primary">
			<a href="login.php" class="btn btn-danger">Kembali</a>
		</center>
	</form>
<?php
}
?>
</body>
</html>
