
<?php
// including the database connection file
include("header.php");
include_once("connection.php");



?>
<?php
//getting id from url
$id = $_GET['id'];
$user_id = $_SESSION['id'];

//selecting data associated with this particular id
$gedung = mysqli_query($mysqli, "SELECT * FROM gedung WHERE id=$id");

while($res = mysqli_fetch_array($gedung))
{
	$name = $res['name'];
	$harga = $res['harga'];
}
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				
				<form name="form1" method="post" action="pesan_action.php">
					
					<input type="hidden" name="user_id" value=<?php echo $_SESSION['id'];?>>
					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
					<input type="hidden" name="name" value=<?php echo $name;?>>
					<input type="hidden" name="harga" value=<?php echo $harga;?>>

					<div class="form-group row">
						<label for="staticEmail" class="col-sm-4 col-form-label">Nama Gedung</label>
						<div class="col-sm-8">
							<input type="text" readonly class="form-control-plaintext" value="<?php echo $name;?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-4 col-form-label">Harga</label>
						<div class="col-sm-8">
							<input type="text" readonly class="form-control-plaintext" value="<?php echo $harga;?> / jam">
						</div>
					</div>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-4 col-form-label">Tanggal</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" name="tanggal">
						</div>
					</div>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-4 col-form-label">Waktu Mulai</label>
						<div class="col-sm-8">
							<input type="time" class="form-control" name="waktu_mulai">
						</div>
					</div>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-4 col-form-label">Waktu Selesai</label>
						<div class="col-sm-8">
							<input type="time" class="form-control" name="waktu_selesai">
						</div>
					</div>
					<center>
						<input type="submit" name="submit" value="Pesan" class="btn btn-primary">
					</center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
