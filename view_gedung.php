<?php
include 'header_admin.php';
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM gedung ORDER BY id ASC");
?>
	<div class="container">
		<h4 class="float-left">List Gedung</h4>
		<a href="add_gedung.php" class="btn btn-primary float-right">Tambah Gedung</a>
		<div class="clearfix"></div>
		<br>
		<table class="table">
			<tr>
				<th>No</th>
				<th>Nama Gedung</th>
				<th>Harga</th>
				<th>Foto</th>
				<th>Spesifikasi</th>
				<!-- <th>Aksi</th> -->
			</tr>
			<?php
			while($res = mysqli_fetch_array($result)) {		
				echo "<tr>";
				echo "<td>".$res['id']."</td>";
				echo "<td>".$res['name']."</td>";
				echo "<td>".$res['harga']."</td>";
				echo "<td><img src='images/".$res['foto']."' width='100' height='100'></td>";	
				echo "<td>".$res['spesifikasi']."</td>";
				// echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
			}
			?>
		</table>
	</div>	
</body>
</html>
