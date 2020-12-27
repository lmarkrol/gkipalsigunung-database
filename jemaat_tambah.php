<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
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

			$cek = mysqli_query($koneksi, "SELECT * FROM personal WHERE nomorinduk='$nomorinduk'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO personal(nomorinduk,	namalengkap, jeniskelamin, sukuetnis, tempatlahir, tanggallahir, golongandarah,	rhesus,	statusjemaat, statusrumah, alamat, rt, rw, kelurahan, kecamatan, kotamadya,	kodepos, telepon, fax, nomorhp,	email, wilayah,	kelompok, statuswarga, tanggalwarga, nomorbaptis, baptistanggal, baptistahun, baptisgereja,	baptispendeta, baptisdewasa, baptisdewasatanggal, baptisdewasatahun,	baptisdewasagereja,	baptisdewasapendeta, nomorsidi,	siditanggal, siditahun,	sidigereja,	sidipendeta, nomoratesimasuk, atesimasuktanggal, atesimasuktahun, atesimasukgereja,	nomoratesikeluar, atesikeluartanggal, atesikeluartahun,	atesikeluargereja, wafat, wafattanggal,	wafattahun,	wafattempat, marital, nikah, nikahtanggal, nikahtahun, nikahgereja, nikahpendeta, catatansipil, catatansipiltanggal, catatansipiltahun, catatansipiltempat, kua, kuatanggal, kuatahun, kuatempat, cerai, ceraitanggal, ceraitahun, ceraitempat, pasangan, anakkandung, anaktanggungan, ayah, ayahwafat, ibu, ibuwafat, anakke, nomorkk, statuskk, gelar, pekerjaan, instansi, jabatan, kantoralamat, kantorkotamadya, kantorkodepos, kantortelepon, kantorfax, kantoremail, kantorwebsite, penghasilan, nomorpersembahan, catatan1, catatan2, foto, first_entry, first_log, update_entry, update_log,
				namaadmin) VALUES('$nomorinduk', '$namalengkap', '$jeniskelamin', '$sukuetnis', '$tempatlahir', '$tanggallahir', '$golongandarah', '$rhesus', '$statusjemaat', '$statusrumah', '$alamat', '$rt', '$rw', '$kelurahan', '$kecamatan', '$kotamadya', '$kodepos', '$telepon', '$fax', '$nomorhp', '$email', '$wilayah', '$kelompok', '$statuswarga', '$tanggalwarga', '$nomorbaptis', '$baptistanggal', '$baptistahun', '$baptisgereja', '$baptispendeta', '$baptisdewasa', '$baptisdewasatanggal', '$baptisdewasatahun', '$baptisdewasagereja', '$baptisdewasapendeta', '$nomorsidi', '$siditanggal', '$siditahun', '$sidigereja', '$sidipendeta', '$nomoratesimasuk', '$atesimasuktanggal', '$atesimasuktahun', '$atesimasukgereja', '$nomoratesikeluar', '$atesikeluartanggal', '$atesikeluartahun', '$atesikeluargereja', '$wafat', '$wafattanggal', '$wafattahun', '$wafattempat', '$marital', '$nikah', '$nikahtanggal', '$nikahtahun', '$nikahgereja', '$nikahpendeta', '$catatansipil', '$catatansipiltanggal', '$catatansipiltahun', '$catatansipiltempat', '$kua', '$kuatanggal', '$kuatahun', '$kuatempat', '$cerai', '$ceraitanggal', '$ceraitahun', '$ceraitempat', '$pasangan', '$anakkandung', '$anaktanggungan', '$ayah', '$ayahwafat', '$ibu', '$ibuwafat', '$anakke', '$nomorkk', '$statuskk', '$gelar', '$pekerjaan', '$instansi', '$jabatan', '$kantoralamat', '$kantorkotamadya', '$kantorkodepos', '$kantortelepon', '$kantorfax', '$kantoremail', '$kantorwebsite', '$penghasilan', '$nomorpersembahan', '$catatan1', '$catatan2', '$foto', '$first_entry', '$first_log', '$update_entry', '$update_log', '$namaadmin')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_jemaat";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, nomorinduk sudah terdaftar.</div>';
			}
		}
		?>

<form action="index.php?page=tambah_jemaat" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Induk</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nomorinduk" class="form-control" size="4" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="namalengkap" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="jeniskelamin" value="Laki-Laki" >Laki-Laki
						</label>
						&emsp;
						<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="jeniskelamin" value="Perempuan" >Perempuan
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Suku/Etnis</label>
				<div class="col-md-6 col-sm-6">
					<select name="sukuetnis" class="form-control" >
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
					<input type="text" name="tempatlahir" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
				<div class="col-md-6 col-sm-6">
					<input type="date" name="tanggallahir" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Golongan Darah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="golongandarah" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Rhesus</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="rhesus" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="rhesus" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">RT</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="rt" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">RW</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="rw" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kelurahan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kelurahan" class="form-control" >
				</div>
			</div>
			
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kecamatan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kecamatan" class="form-control" >
				</div>
			</div>
			
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kota Madya</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kotamadya" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kode POS</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kodepos" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Telepon</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="telepon" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Fax</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="fax" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor HP</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomorhp" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="email" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Wiayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="wilayah" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kelompok</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kelompok" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status Warga</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="statuswarga" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Warga</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="tanggalwarga" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Baptis</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomorbaptis" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptistanggal" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptistahun" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Gereja</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptisgereja" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Pendeta</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptispendeta" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Dewasa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptisdewasa" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Dewasa Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptisdewasatanggal" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Dewasa Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptisdewasatahun" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Dewasa Gereja</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptisdewasagereja" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Baptis Dewasa Pendeta</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="baptisdewasapendeta" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Sidi</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomorsidi" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Sidi Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="siditanggal" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Sidi Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="siditahun" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Sidi Gereja</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="sidigereja" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Sidi Pendeta</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="sidipendeta" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Atesi Masuk</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomoratesimasuk" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Atesi Masuk Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="atesimasuktanggal" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Atesi Masuk Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="atesimasuktahun" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Atesi Masuk Gereja</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="atesimasukgereja" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Atesi Keluar</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomoratesikeluar" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Atesi Keluar Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="atesikeluartanggal" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Atesi Keluar Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="atesikeluartahun" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Atesi Keluar Gereja</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="atesikeluargereja" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Wafat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="wafat" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Wafat Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="wafattanggal" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Wafat Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="wafattahun" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Wafat Tempat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="wafattempat" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Marital</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="marital" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nikah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nikah" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nikah Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nikahtanggal" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nikah Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nikahtahun" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nikah Gereja</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nikahgereja" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nikah Pendeta</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nikahpendeta" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Catatan Sipil</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="catatansipil" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Catatan Sipil Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="catatansipiltanggal" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Catatan Sipil Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="catatansipiltahun" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Catatan Sipil Tempat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="catatansipiltempat" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">KUA</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kua" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">KUA Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kuatanggal" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">KUA Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kuatahun" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">KUA Tempat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kuatempat" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Cerai</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="cerai" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Cerai Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ceraitanggal" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Cerai Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ceraitahun" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Cerai Tempat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ceraitempat" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Pasangan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="pasangan" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Anak Kandung</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="anakkandung" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Anak Tanggungan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="anaktanggungan" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Ayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ayah" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Ayah Wafat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ayahwafat" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Ibu</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ibu" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Ibu Wafat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ibuwafat" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Anak Ke</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="anakke" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor KK</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomorkk" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status KK</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="statuskk" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Gelar</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="gelar" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="pekerjaan" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Instansi</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="instansi" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jabatan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="jabatan" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantoralamat" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Kota Madya</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantorkotamadya" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Kode Pos</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantorkodepos" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Telepon</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantortelepon" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Fax</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantorfax" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Email</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantoremail" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kantor Website</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="kantorwebsite" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Penghasilan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="penghasilan" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Persembahan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomorpersembahan" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Catatan 1</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="catatan1" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Catatan 2</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="catatan2" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Foto</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="foto" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">First Entry</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="first_entry" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">First Log</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="first_log" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Update Entry</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="update_entry" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Update Log</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="update_log" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Admin</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="namaadmin" class="form-control" >
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>