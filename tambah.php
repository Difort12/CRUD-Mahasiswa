<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$Id = $_POST['Id'];
			$Nim= $_POST['Nim'];
			$Nama_Mhs= $_POST['Nama_Mhs'];
			$Jenis_Kelamin= $_POST['Jenis_Kelamin'];
			$Alamat	= $_POST['Alamat'];
			$Kota	= $_POST['Kota'];
			$Email	= $_POST['Email'];
			$Foto	= $_POST['Foto'];
			
			

			$cek = mysqli_query($koneksi, "SELECT * FROM tbl_mhs WHERE Nim='$Nim'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO tbl_mhs(Id,Nim, Nama_Mhs, Jenis_Kelamin,Alamat,Kota,Email,Foto) VALUES('$Id','$Nim', '$Nama_Mhs', '$Jenis_Kelamin','$Alamat','$Kota','$Email','$Foto')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_mhs";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
			}
		}
		?>

		<form action="index.php?page=tambah_mhs" method="post">
		<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Id</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Id" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nim</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Nim" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama_Mhs" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Laki-Laki" required>Laki-Laki
						</label>
						<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Perempuan" required>Perempuan
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Alamat" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kota</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Kota" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Email" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Foto</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Foto" class="form-control" value="<?php echo 'Coming soon'?>" readonly>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
