<?php
include 'header_admin.php';
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM pemesan ORDER BY id ASC");
?>
	<div class="container">
		<h4>List User</h4>
		<table class="table">
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Username</th>
				<!-- <th>Aksi</th> -->
			</tr>
			<?php
			while($res = mysqli_fetch_array($result)) {		
				echo "<tr>";
				echo "<td>".$res['id']."</td>";
				echo "<td>".$res['name']."</td>";
				echo "<td>".$res['email']."</td>";
				echo "<td>".$res['username']."</td>";	
				// echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
			}
			?>
		</table>
	</div>	
</body>
</html>
