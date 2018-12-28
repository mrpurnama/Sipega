<?php
//including the database connection file
include("header.php");
include_once("connection.php");
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM gedung ORDER BY id ASC");
?>
<div class="container">
	<div class="row list-gedung">

		<?php
			while($res = mysqli_fetch_array($result)) {
				echo '
					<div class="col-md-4">
						<div class="card mb-4 box-shadow">
							<img class="card-img-top" src="images/'.$res['foto'].'" alt='.$res['name'].'>
							<div class="card-body">
								<h4>Nama Gedung : '.$res['name'].'</h4>
								<h5>Harga : '.$res['harga'].'</h5>
								<p class="card-text">Keterangan : '.$res['spesifikasi'].'</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
										<a href="pesan.php?id='.$res['id'].'" class="btn btn-primary">Pesan</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				';
			} 
		?>
	</div>
</body>
</html>