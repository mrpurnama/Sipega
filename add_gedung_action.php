<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['submit'])) {	
	$name = $_POST['name'];
	$harga = $_POST['harga'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$spesifikasi = $_POST['spesifikasi'];

	// Set path folder tempat menyimpan fotonya
	$path = "images/".$foto;
		
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		// $result = mysqli_query($mysqli, "INSERT INTO products(name, harga, foto) VALUES('$name','$harga','$foto')");
		
		//display success message
		// echo "<font color='green'>Data added successfully.";
		// echo "<br/><a href='view.php'>View Result</a>";
		// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		$result = mysqli_query($mysqli, "INSERT INTO gedung(name, harga, foto, spesifikasi) VALUES('$name','$harga','$foto', '$spesifikasi')");
			header("location: view_gedung.php"); // Redirect ke halaman index.php

		// Proses simpan ke Database
		if($result){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: view_gedung.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='add_gedung.php'>Kembali Ke Form</a>";
		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
		}
	}
	?>
</body>
</html>