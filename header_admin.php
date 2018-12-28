<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login_admin.php');
}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../../../favicon.ico">
		<title>SIPEGA - <?php echo $_SESSION['name'] ?></title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="navbar navbar-dark bg-dark box-shadow navbar-expand-lg justify-content-end">
				<div class="container d-flex justify-content-between">
					<a href="#" class="navbar-brand d-flex align-items-center">
						<strong>SIPEGA</strong>
					</a>
					<span href="#" class="navbar-brand d-flex align-items-center">
						Hello, <?php echo $_SESSION['name'] ?>
					</span>
					
					<div class="collapse navbar-collapse navbar-right" id="navbarsExample07">
						<ul class="navbar-nav ml-auto text-right">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="view_user.php">List User</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="view_gedung.php">List Gedung</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="list_pesanan_admin.php">List Pemesanan Gedung</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="logout.php">Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>