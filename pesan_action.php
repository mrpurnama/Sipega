<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['submit'])) {	
	$id_gedung = $_POST['id'];
	$id_user = $_POST['user_id'];
	$harga = $_POST['harga'];
	$tanggal = $_POST['tanggal'];
	$waktu_mulai = $_POST['waktu_mulai'];
	$waktu_selesai = $_POST['waktu_selesai'];

	$time1 = strtotime($waktu_mulai);
	$time2 = strtotime($waktu_selesai);
	$difference = round(abs($time1 - $time2) / 3600,2);
	$total	=	$harga * $difference;
	echo $time1;
	echo "</br>";
	echo $difference;
	echo "</br>";
	echo $total;
	echo "</br>";
	$result = mysqli_query($mysqli, "INSERT INTO pemesanan(id_gedung, id_pemesan, tanggal, waktu_mulai, waktu_selesai, total) VALUES('$id_gedung','$id_user','$tanggal', '$waktu_mulai', '$waktu_selesai', $total)");

	header ("Location: list_pesanan.php");
}
	?>