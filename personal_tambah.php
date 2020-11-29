<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$nomorinduk		= $_POST['nomorinduk'];
			$statusjemaat	= $_POST['statusjemaat'];
			$namalengkap	= $_POST['namalengkap'];
			$jeniskelamin	= $_POST['jeniskelamin'];
			$sukuetnis		= $_POST['sukuetnis'];
			$tempatlahir	= $_POST['tempatlahir'];
			$tanggallahir	= $_POST['tanggallahir'];
			$golongandarah	= $_POST['golongandarah'];
			$rhesus			= $_POST['rhesus'];
			$wilayah		= $_POST['wilayah'];
			$kelompok		= $_POST['kelompok'];
			$namaadmin		= $_POST['namaadmin'];

			$cek = mysqli_query($koneksi, "SELECT * FROM personal WHERE nomorinduk='$nomorinduk'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO personal(nomorinduk, statusjemaat, namalengkap, jeniskelamin, sukuetnis, tempatlahir, tanggallahir, golongandarah, rhesus, wilayah, kelompok, namaadmin) VALUES('$nomorinduk', '$statusjemaat', '$namalengkap', '$jeniskelamin', '$sukuetnis', '$tempatlahir', '$tanggallahir', '$golongandarah', '$rhesus', '$wilayah', '$kelompok', '$namaadmin')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_personal";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, nomorinduk sudah terdaftar.</div>';
			}
		}
		?>

		<form action="index.php?page=tambah_personal" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Induk</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nomorinduk" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status Jemaat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="statusjemaat" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="namalengkap" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="jeniskelamin" value="Laki-Laki" required>Laki-Laki
						</label>
						<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="jeniskelamin" value="Perempuan" required>Perempuan
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Suku/Etnis</label>
				<div class="col-md-6 col-sm-6">
					<select name="sukuetnis" class="form-control" required>
						<option value="">Pilih Suku/Etnis</option>
						<option value="Batak">Batak</option>
						<option value="Jawa">Jawa</option>
						<option value="Sunda">Sunda</option>
						<option value="Ambon">Ambon</option>
						<option value="Betawi">Betawi</option>
						<option value="Bugis">Bugis</option>
						<option value="Madura">Madura</option>
						<option value="Dayak">Dayak</option>
						<option value="Minahasa">Minahasa</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="tempatlahir" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="tanggallahir" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Golongan Darah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="golongandarah" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Rhesus</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="rhesus" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Wilayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="wilayah" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kelompok</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kelompok" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Admin</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="namaadmin" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
