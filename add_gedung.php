<?php
// including the database connection file
include("header.php");
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<form action="add_gedung_action.php" method="post" name="form1"  enctype="multipart/form-data">
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-4 col-form-label">Nama Gedung</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="name">
						</div>
					</div>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-4 col-form-label">Harga</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="harga">
						</div>
					</div>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-4 col-form-label">Foto</label>
						<div class="col-sm-8">
							<input type="file" class="form-control" name="foto">
						</div>
					</div>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-4 col-form-label">Spesifikasi</label>
						<div class="col-sm-8">
							<textarea name="spesifikasi" class="form-control" rows="5"></textarea>
						</div>
					</div>
					<center>
						<input type="submit" name="submit" value="Tambah" class="btn btn-primary">
					</center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

