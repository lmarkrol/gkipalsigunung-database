<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['nomorinduk'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$nomorinduk = $_GET['nomorinduk'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM personal WHERE nomorinduk='$nomorinduk'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
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
			$alamat			= $_POST['alamat'];
			$wilayah		= $_POST['wilayah'];
			$kelompok		= $_POST['kelompok'];
			$namaadmin		= $_POST['namaadmin'];

			$sql = mysqli_query($koneksi, "UPDATE personal SET statusjemaat='$statusjemaat', namalengkap='$namalengkap', jeniskelamin='$jeniskelamin', sukuetnis='$sukuetnis', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', golongandarah='$golongandarah', rhesus='$rhesus', alamat='$alamat', wilayah='$wilayah', kelompok='$kelompok', namaadmin='$namaadmin' WHERE nomorinduk='$nomorinduk'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_personal";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="index.php?page=edit_personal&nomorinduk=<?php echo $nomorinduk; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">nomorinduk</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomorinduk" class="form-control" size="4" value="<?php echo $data['nomorinduk']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status Jemaat</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="statusjemaat" value="Aktif" <?php if($data['statusjemaat'] == 'Aktif'){ echo 'checked'; } ?> required>Aktif
						</label>
						<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="statusjemaat" value="Tidak Aktif" <?php if($data['statusjemaat'] == 'Tidak Aktif'){ echo 'checked'; } ?> required>Tidak Aktif
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="namalengkap" class="form-control" value="<?php echo $data['namalengkap']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="jeniskelamin" value="Laki-Laki" <?php if($data['jeniskelamin'] == 'Laki-Laki'){ echo 'checked'; } ?> required>Laki-Laki
						</label>
						<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="jeniskelamin" value="Perempuan" <?php if($data['jeniskelamin'] == 'Perempuan'){ echo 'checked'; } ?> required>Perempuan
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Suku/Etnis</label>
				<div class="col-md-6 col-sm-6">
					<select name="sukuetnis" class="form-control" required>
						<option value="">Pilih Suku/Etnis</option>
						<option value="Batak" <?php if($data['sukuetnis'] == 'Batak'){ echo 'selected'; } ?>>Batak</option>
						<option value="Jawa" <?php if($data['sukuetnis'] == 'Jawa'){ echo 'selected'; } ?>>Jawa</option>
						<option value="Sunda" <?php if($data['sukuetnis'] == 'Sunda'){ echo 'selected'; } ?>>Sunda</option>
						<option value="Ambon" <?php if($data['sukuetnis'] == 'Ambon'){ echo 'selected'; } ?>>Ambon</option>
						<option value="Betawi" <?php if($data['sukuetnis'] == 'Betawi'){ echo 'selected'; } ?>>Betawi</option>
						<option value="Bugis" <?php if($data['sukuetnis'] == 'Bugis'){ echo 'selected'; } ?>>Bugis</option>
						<option value="Madura" <?php if($data['sukuetnis'] == 'Madura'){ echo 'selected'; } ?>>Madura</option>
						<option value="Dayak" <?php if($data['sukuetnis'] == 'Dayak'){ echo 'selected'; } ?>>Dayak</option>
						<option value="Minahasa" <?php if($data['sukuetnis'] == 'Minahasa'){ echo 'selected'; } ?>>Minahasa</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">TempatLahir</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="tempatlahir" class="form-control" value="<?php echo $data['tempatlahir']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
				<div class="col-md-6 col-sm-6">
					<input type="date" name="tanggallahir" class="form-control" value="<?php echo $data['tanggallahir']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Golongan Darah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="golongandarah" class="form-control" value="<?php echo $data['golongandarah']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Rhesus</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="rhesus" class="form-control" value="<?php echo $data['rhesus']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="rhesus" class="form-control" value="<?php echo $data['rhesus']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Wilayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="wilayah" class="form-control" value="<?php echo $data['wilayah']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kelompok</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kelompok" class="form-control" value="<?php echo $data['kelompok']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Admin</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="namaadmin" class="form-control" value="<?php echo $data['namaadmin']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=tampil_personal" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
