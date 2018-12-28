

<?php

include 'header.php';
//including the database connection file
include_once("connection.php");
	$id_user = $_SESSION['id'];

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT a.*, b.name FROM pemesanan AS a INNER JOIN gedung as b on a.id_gedung=b.id WHERE a.id_pemesan=$id_user ORDER BY id ASC");
?>
	<div class="container">
		<table class="table">
			<tr>
				<th>No</th>
				<th>Nama Gedung</th>
				<th>Total</th>
				<th>Tanggal Pemesanan</th>
				<th>Waktu</th>
			</tr>
			<?php
			while($res = mysqli_fetch_array($result)) {		
				echo "<tr>";
				echo "<td>".$res['id']."</td>";
				echo "<td>".$res['name']."</td>";
				echo "<td>".$res['total']."</td>";
				echo "<td>".$res['tanggal']."</td>";
				echo "<td>".$res['waktu_mulai']." - ".$res['waktu_selesai']."</td>";
			}
			?>
		</table>
	</div>
</body>
</html>
