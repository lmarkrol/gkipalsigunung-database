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
			$namalengkap	= $_POST['namalengkap'];
			$jeniskelamin	= $_POST['jeniskelamin'];
			$sukuetnis		= $_POST['sukuetnis'];
			$tempatlahir	= $_POST['tempatlahir'];
			$tanggallahir	= $_POST['tanggallahir'];
			$golongandarah	= $_POST['golongandarah'];
			$rhesus			= $_POST['rhesus'];
			$statusjemaat	= $_POST['statusjemaat'];
			$statusrumah	= $_POST['statusrumah'];
			$alamat			= $_POST['alamat'];
			$rt				= $_POST['rt'];
			$rw				= $_POST['rw'];
			$kelurahan		= $_POST['kelurahan'];
			$kecamatan		= $_POST['kecamatan'];
			$kotamadya		= $_POST['kotamadya'];
			$kodepos		= $_POST['kodepos'];
			$telepon		= $_POST['telepon'];
			$fax			= $_POST['fax'];
			$nomorhp		= $_POST['nomorhp'];
			$email			= $_POST['email'];
			$wilayah		= $_POST['wilayah'];
			$kelompok		= $_POST['kelompok'];
			$statuswarga	= $_POST['statuswarga'];
			$tanggalwarga	= $_POST['tanggalwarga'];
			$nomorbaptis	= $_POST['nomorbaptis'];
			$baptistanggal	= $_POST['baptistanggal'];
			$baptistahun	= $_POST['baptistahun'];
			$baptisgereja	= $_POST['baptisgereja'];
			$baptispendeta	= $_POST['baptispendeta'];
			$baptisdewasa	= $_POST['baptisdewasa'];
			$baptisdewasatanggal	= $_POST['baptisdewasatanggal'];
			$baptisdewasatahun		= $_POST['baptisdewasatahun'];
			$baptisdewasagereja		= $_POST['baptisdewasagereja'];
			$baptisdewasapendeta	= $_POST['baptisdewasapendeta'];
			$nomorsidi		= $_POST['nomorsidi'];
			$siditanggal	= $_POST['siditanggal'];
			$siditahun		= $_POST['siditahun'];
			$sidigereja		= $_POST['sidigereja'];
			$sidipendeta	= $_POST['sidipendeta'];
			$nomoratesimasuk	= $_POST['nomoratesimasuk'];
			$atesimasuktanggal	= $_POST['atesimasuktanggal'];
			$atesimasuktahun	= $_POST['atesimasuktahun'];
			$atesimasukgereja	= $_POST['atesimasukgereja'];
			$nomoratesikeluar	= $_POST['nomoratesikeluar'];
			$atesikeluartanggal	= $_POST['atesikeluartanggal'];
			$atesikeluartahun	= $_POST['atesikeluartahun'];
			$atesikeluargereja	= $_POST['atesikeluargereja'];
			$wafat			= $_POST['wafat'];
			$wafattanggal	= $_POST['wafattanggal'];
			$wafattahun		= $_POST['wafattahun'];
			$wafattempat	= $_POST['wafattempat'];
			$marital		= $_POST['marital'];
			$nikah			= $_POST['nikah'];
			$nikahtanggal	= $_POST['nikahtanggal'];
			$nikahtahun		= $_POST['nikahtahun'];
			$nikahgereja	= $_POST['nikahgereja'];
			$nikahpendeta	= $_POST['nikahpendeta'];
			$catatansipil	= $_POST['catatansipil'];
			$catatansipiltangggal	= $_POST['catatansipiltangggal'];
			$catatansipiltahun	= $_POST['catatansipiltahun'];
			$catatansipiltempat	= $_POST['catatansipiltempat'];
			$kua			= $_POST['kua'];
			$kuatanggal		= $_POST['kuatanggal'];
			$kuatahun		= $_POST['kuatahun'];
			$kuatempat		= $_POST['kuatempat'];
			$cerai			= $_POST['cerai'];
			$ceraitanggal	= $_POST['ceraitanggal'];
			$ceraitahun		= $_POST['ceraitahun'];
			$ceraitempat	= $_POST['ceraitempat'];
			$pasangan		= $_POST['pasangan'];
			$anakkandung	= $_POST['anakkandung'];
			$anaktanggungan	= $_POST['anaktanggungan'];
			$ayah			= $_POST['ayah'];
			$ayahwafat		= $_POST['ayahwafat'];
			$ibu			= $_POST['ibu'];
			$ibuwafat		= $_POST['ibuwafat'];
			$anakke			= $_POST['anakke'];
			$nomorkk		= $_POST['nomorkk'];
			$statuskk		= $_POST['statuskk'];
			$gelar			= $_POST['gelar'];
			$pekerjaan		= $_POST['pekerjaan'];
			$instansi		= $_POST['instansi'];
			$jabatan		= $_POST['jabatan'];
			$kantoralamat	= $_POST['kantoralamat'];
			$kantorkotamadya	= $_POST['kantorkotamadya'];
			$kantorkodepos	= $_POST['kantorkodepos'];
			$kantortelepon	= $_POST['kantortelepon'];
			$kantorfax		= $_POST['kantorfax'];
			$kantoremail	= $_POST['kantoremail'];
			$kantorwebsite	= $_POST['kantorwebsite'];
			$penghasilan	= $_POST['penghasilan'];
			$nomorpersembahan	= $_POST['nomorpersembahan'];
			$catatan1		= $_POST['catatan1'];
			$catatan2		= $_POST['catatan2'];
			$foto			= $_POST['foto'];
			$first_entry	= $_POST['first_entry'];
			$first_log		= $_POST['first_log'];
			$update_entry	= $_POST['update_entry'];
			$update_log		= $_POST['update_log'];
			$namaadmin		= $_POST['namaadmin'];

			$sql = mysqli_query($koneksi, "UPDATE personal SET 
			namalengkap='$namalengkap', 
			jeniskelamin='$jeniskelamin', 
			sukuetnis='$sukuetnis', 
			tempatlahir='$tempatlahir', 
			tanggallahir='$tanggallahir', 
			golongandarah='$golongandarah', 
			rhesus='$rhesus', 
			statusjemaat='$statusjemaat', 
			statusrumah='$statusrumah', 
			alamat='$alamat', 
			rt='$rt', 
			rw='$rw', 
			kelurahan='$kelurahan', 
			kecamatan='$kecamatan', 
			kotamadya='$kotamadya', 
			kodepos='$kodepos', 
			telepon='$telepon', 
			fax='$fax', 
			nomorhp='$nomorhp', 
			email='$email', 
			wilayah='$wilayah', 
			kelompok='$kelompok', 
			statuswarga='$statuswarga', 
			tanggalwarga='$tanggalwarga', 
			nomorbaptis='$nomorbaptis', 
			baptistanggal='$baptistanggal', 
			baptistahun='$baptistahun', 
			baptisgereja='$baptisgereja', 
			baptispendeta='$baptispendeta',  
			baptisdewasa='$baptisdewasa',  
			baptisdewasatanggal='$baptisdewasatanggal',  
			baptisdewasatahun='$baptisdewasatahun',  
			baptisdewasagereja='$baptisdewasagereja',  
			baptisdewasapendeta='$baptisdewasapendeta',  
			nomorsidi='$nomorsidi',  
			siditanggal='$siditanggal',  
			siditahun='$siditahun',  
			sidigereja='$sidigereja',  
			sidipendeta='$sidipendeta',  
			nomoratesimasuk='$nomoratesimasuk',  
			atesimasuktanggal='$atesimasuktanggal',  
			atesimasuktahun='$atesimasuktahun',  
			atesimasukgereja='$atesimasukgereja',  
			nomoratesikeluar='$nomoratesikeluar',  
			atesikeluartanggal='$atesikeluartanggal',  
			atesikeluartahun='$atesikeluartahun',  
			atesikeluargereja='$atesikeluargereja',  
			wafat='$wafat',  
			wafattanggal='$wafattanggal',  
			wafattahun='$wafattahun',  
			wafattempat='$wafattempat',  
			marital='$marital',  
			nikah='$nikah',  
			nikahtanggal='$nikahtanggal',  
			nikahtahun='$nikahtahun',  
			nikahgereja='$nikahgereja',  
			nikahpendeta='$nikahpendeta',  
			catatansipil='$catatansipil',  
			catatansipiltanggal='$catatansipiltanggal',  
			catatansipiltahun='$catatansipiltahun',  
			catatansipiltempat='$catatansipiltempat',  
			kua='$kua',  
			kuatanggal='$kuatanggal',  
			kuatahun='$kuatahun',  
			kuatempat='$kuatempat',  
			cerai='$cerai',  
			ceraitanggal='$ceraitanggal',  
			ceraitahun='$ceraitahun',  
			ceraitempat='$ceraitempat',  
			pasangan='$pasangan',  
			anakkandung='$anakkandung',  
			anaktanggungan='$anaktanggungan',  
			ayah='$ayah',  
			ayahwafat='$ayahwafat',  
			ibu='$ibu',  
			ibuwafat='$ibuwafat',  
			anakke='$anakke',  
			nomorkk='$nomorkk',  
			statuskk='$statuskk',  
			gelar='$gelar', 
			pekerjaan='$pekerjaan',  
			instansi='$instansi',  
			jabatan='$jabatan',  
			kantoralamat='$kantoralamat',  
			kantorkotamadya='$kantorkotamadya',  
			kantorkodepos='$kantorkodepos',  
			kantortelepon='$kantortelepon',  
			kantorfax='$kantorfax',  
			kantoremail='$kantoremail',  
			kantorwebsite='$kantorwebsite',  
			penghasilan='$penghasilan',  
			nomorpersembahan='$nomorpersembahan',  
			catatan1='$catatan1',  
			catatan2='$catatan2',  
			foto='$foto',  
			first_entry='$first_entry',  
			first_log='$first_log',  
			update_entry='$update_entry', 
			update_log='$update_log',  
			namaadmin='$namaadmin' WHERE nomorinduk='$nomorinduk'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_jemaat";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="index.php?page=edit_jemaat&nomorinduk=<?php echo $nomorinduk; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">nomorinduk</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomorinduk" class="form-control" size="4" value="<?php echo $data['nomorinduk']; ?>" readonly required>
				</div>
			</div>
			
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="namalengkap" class="form-control" value="<?php echo $data['namalengkap']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="jeniskelamin" value="Laki-Laki" <?php if($data['jeniskelamin'] == 'Laki-Laki'){ echo 'checked'; } ?> >Laki-Laki
						</label>
						<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="jeniskelamin" value="Perempuan" <?php if($data['jeniskelamin'] == 'Perempuan'){ echo 'checked'; } ?> >Perempuan
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Suku/Etnis</label>
				<div class="col-md-6 col-sm-6">
					<select name="sukuetnis" class="form-control" >
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
					<input type="text" name="tempatlahir" class="form-control" value="<?php echo $data['tempatlahir']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
				<div class="col-md-6 col-sm-6">
					<input type="date" name="tanggallahir" class="form-control" value="<?php echo $data['tanggallahir']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Golongan Darah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="golongandarah" class="form-control" value="<?php echo $data['golongandarah']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Rhesus</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="rhesus" class="form-control" value="<?php echo $data['rhesus']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status Jemaat</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="statusjemaat" value="Aktif" <?php if($data['statusjemaat'] == 'Aktif'){ echo 'checked'; } ?> >Aktif
						</label>
						<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="statusjemaat" value="Tidak Aktif" <?php if($data['statusjemaat'] == 'Tidak Aktif'){ echo 'checked'; } ?> >Tidak Aktif
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">RT</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="rt" class="form-control" value="<?php echo $data['rt']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">RW</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="rw" class="form-control" value="<?php echo $data['rw']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kelurahan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kelurahan" class="form-control" value="<?php echo $data['kelurahan']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kecamatan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kecamatan" class="form-control" value="<?php echo $data['kecamatan']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kota Madya</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kotamadya" class="form-control" value="<?php echo $data['kotamadya']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kode Pos</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kodepos" class="form-control" value="<?php echo $data['kodepos']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Telepon</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="telepon" class="form-control" value="<?php echo $data['telepon']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Fax</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="fax" class="form-control" value="<?php echo $data['fax']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor HP</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomorhp" class="form-control" value="<?php echo $data['nomorhp']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="email" class="form-control" value="<?php echo $data['email']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Wilayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="wilayah" class="form-control" value="<?php echo $data['wilayah']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kelompok</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kelompok" class="form-control" value="<?php echo $data['kelompok']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status Warga</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="statuswarga" class="form-control" value="<?php echo $data['statuswarga']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggan Warga</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="tanggalwarga" class="form-control" value="<?php echo $data['tanggalwarga']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Baptis</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomorbaptis" class="form-control" value="<?php echo $data['nomorbaptis']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptistanggal" class="form-control" value="<?php echo $data['baptistanggal']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptistahun" class="form-control" value="<?php echo $data['baptistahun']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Gereja</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptisgereja" class="form-control" value="<?php echo $data['baptisgereja']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Pendeta</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptispendeta" class="form-control" value="<?php echo $data['baptispendeta']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Dewasa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptisdewasa" class="form-control" value="<?php echo $data['baptisdewasa']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Dewasa Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptisdewasatanggal" class="form-control" value="<?php echo $data['baptisdewasatanggal']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Dewasa Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptisdewasatahun" class="form-control" value="<?php echo $data['baptisdewasatahun']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Dewasa Gereja</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptisdewasagereja" class="form-control" value="<?php echo $data['baptisdewasagereja']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Dewasa Pendeta</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptisdewasapendeta" class="form-control" value="<?php echo $data['baptisdewasapendeta']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Sidi</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomorsidi" class="form-control" value="<?php echo $data['nomorsidi']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Sidi Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="siditanggal" class="form-control" value="<?php echo $data['siditanggal']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Sidi Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="siditahun" class="form-control" value="<?php echo $data['siditahun']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Sidi Gereja</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="sidigereja" class="form-control" value="<?php echo $data['sidigereja']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Sidi Pendeta</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="sidipendeta" class="form-control" value="<?php echo $data['sidipendeta']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Atesi Masuk</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomoratesimasuk" class="form-control" value="<?php echo $data['nomoratesimasuk']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Atesi Masuk Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="atesimasuktanggal" class="form-control" value="<?php echo $data['atesimasuktanggal']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Atesi Masuk Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="atesimasuktahun" class="form-control" value="<?php echo $data['atesimasuktahun']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Atesi Masuk Gereja</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="atesimasukgereja" class="form-control" value="<?php echo $data['atesimasukgereja']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Atesi Keluar</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomoratesikeluar" class="form-control" value="<?php echo $data['nomoratesikeluar']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Atesi Keluar Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="atesikeluartanggal" class="form-control" value="<?php echo $data['atesikeluartanggal']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Atesi Keluar Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="atesikeluartahun" class="form-control" value="<?php echo $data['atesikeluartahun']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Atesi Keluar Gereja</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="atesikeluargereja" class="form-control" value="<?php echo $data['atesikeluargereja']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Wafat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="wafat" class="form-control" value="<?php echo $data['wafat']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Wafat Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="wafattanggal" class="form-control" value="<?php echo $data['wafattanggal']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Wafat Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="wafattahun" class="form-control" value="<?php echo $data['wafattahun']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Wafat Tempat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="wafattempat" class="form-control" value="<?php echo $data['wafattempat']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Marital</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="marital" class="form-control" value="<?php echo $data['marital']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nikah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nikah" class="form-control" value="<?php echo $data['nikah']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nikah Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nikahtanggal" class="form-control" value="<?php echo $data['nikahtanggal']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nikah Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nikahtahun" class="form-control" value="<?php echo $data['nikahtahun']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nikah Gereja</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nikahgereja" class="form-control" value="<?php echo $data['nikahgereja']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nikah Pendeta</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nikahpendeta" class="form-control" value="<?php echo $data['nikahpendeta']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Catatan Sipil</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="catatansipil" class="form-control" value="<?php echo $data['catatansipil']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Catatan Sipil Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="catatansipiltangggal" class="form-control" value="<?php echo $data['catatansipiltangggal']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Catatan Sipil Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="catatansipiltahun" class="form-control" value="<?php echo $data['catatansipiltahun']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Catatan Sipil Tempat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="catatansipiltempat" class="form-control" value="<?php echo $data['catatansipiltempat']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">KUA</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kua" class="form-control" value="<?php echo $data['kua']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">KUA Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kuatanggal" class="form-control" value="<?php echo $data['kuatanggal']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">KUA Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kuatahun" class="form-control" value="<?php echo $data['kuatahun']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">KUA Tempat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kuatempat" class="form-control" value="<?php echo $data['kuatempat']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Cerai</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="cerai" class="form-control" value="<?php echo $data['cerai']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Cerai Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ceraitanggal" class="form-control" value="<?php echo $data['ceraitanggal']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Cerai Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ceraitahun" class="form-control" value="<?php echo $data['ceraitahun']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Cerai Tempat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ceraitempat" class="form-control" value="<?php echo $data['ceraitempat']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Pasangan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="pasangan" class="form-control" value="<?php echo $data['pasangan']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Anak Kandung</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="anakkandung" class="form-control" value="<?php echo $data['anakkandung']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Anak Tanggungan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="anaktanggungan" class="form-control" value="<?php echo $data['anaktanggungan']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Ayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ayah" class="form-control" value="<?php echo $data['ayah']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status Ayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ayahwafat" class="form-control" value="<?php echo $data['ayahwafat']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Ibu</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ibu" class="form-control" value="<?php echo $data['ibu']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status Ibu</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ibuwafat" class="form-control" value="<?php echo $data['ibuwafat']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Anak Ke</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="anakke" class="form-control" value="<?php echo $data['anakke']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor KK</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomorkk" class="form-control" value="<?php echo $data['nomorkk']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status KK</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="statuskk" class="form-control" value="<?php echo $data['statuskk']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Gelar</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="gelar" class="form-control" value="<?php echo $data['gelar']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="pekerjaan" class="form-control" value="<?php echo $data['pekerjaan']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Instansi</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="instansi" class="form-control" value="<?php echo $data['instansi']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jabatan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="jabatan" class="form-control" value="<?php echo $data['jabatan']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantoralamat" class="form-control" value="<?php echo $data['kantoralamat']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Kota Madya</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantorkotamadya" class="form-control" value="<?php echo $data['kantorkotamadya']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Kode Pos</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantorkodepos" class="form-control" value="<?php echo $data['kantorkodepos']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Telepon</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantortelepon" class="form-control" value="<?php echo $data['kantortelepon']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Fax</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantorfax" class="form-control" value="<?php echo $data['kantorfax']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">kantor Email</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantoremail" class="form-control" value="<?php echo $data['kantoremail']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Website</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantorwebsite" class="form-control" value="<?php echo $data['kantorwebsite']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Penghasilan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="penghasilan" class="form-control" value="<?php echo $data['penghasilan']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Persembahan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomorpersembahan" class="form-control" value="<?php echo $data['nomorpersembahan']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Catatan 1</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="catatan1" class="form-control" value="<?php echo $data['catatan1']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Catatan 2</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="catatan2" class="form-control" value="<?php echo $data['catatan2']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Foto</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="foto" class="form-control" value="<?php echo $data['foto']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">First Entry</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="first_entry" class="form-control" value="<?php echo $data['first_entry']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">First Log</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="first_log" class="form-control" value="<?php echo $data['first_log']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Update Entry</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="update_entry" class="form-control" value="<?php echo $data['update_entry']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Update Log</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="update_log" class="form-control" value="<?php echo $data['update_log']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Admin</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="namaadmin" class="form-control" value="<?php echo $data['namaadmin']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=tampil_jemaat" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
