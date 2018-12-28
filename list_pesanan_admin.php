
<?php
include 'header_admin.php';
//including the database connection file
include_once("connection.php");
	$id_user = $_SESSION['id'];

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT a.*, b.name , c.name as nama FROM pemesanan AS a INNER JOIN gedung as b on a.id_gedung=b.id INNER JOIN pemesan as c on a.id_pemesan=c.id ORDER BY id ASC");
?>
	<div class="container">
		<h4>List Pemesanan Gedung</h4>
		<table class="table">
			<tr>
				<th>No</th>
				<th>Nama Pemesan</th>
				<th>Nama Gedung</th>
				<th>Total</th>
				<th>Tanggal Pemesanan</th>
				<th>Waktu</th>
				<!-- <th>Aksi</th> -->
			</tr>
			<?php
			while($res = mysqli_fetch_array($result)) {		
				echo "<tr>";
				echo "<td>".$res['id']."</td>";
				echo "<td>".$res['nama']."</td>";
				echo "<td>".$res['name']."</td>";
				echo "<td>".$res['total']."</td>";
				echo "<td>".$res['tanggal']."</td>";
				echo "<td>".$res['waktu_mulai']." - ".$res['waktu_selesai']."</td>";
				// echo "<td><a href=\"pesan.php?id=$res[id]\">Pesan</a></td>";		
			}
			?>
		</table>
	</div>
			
</body>
</html>
