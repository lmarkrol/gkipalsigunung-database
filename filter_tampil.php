<?php
//memasukkan file config.php
include('config.php');

//TESTCODE
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $sql = "SELECT * FROM `personal` WHERE CONCAT(
		`nomorinduk`, 
		`namalengkap`, 
		`jeniskelamin`,
		`sukuetnis`,
		`tempatlahir`,
		`tanggallahir`,
		`golongandarah`,
		`rhesus`, 
		`statusjemaat`,
		`statusrumah`,
		`alamat`,
		`rt`,
		`rw`,
		`kelurahan`,
		`kecamatan`,
		`kotamadya`,
		`kodepos`,
		`telepon`,
		`fax`,
		`nomorhp`,
		`email`,
		`wilayah`,
		`kelompok`,
		`statuswarga`,
		`tanggalwarga`,
		`nomorbaptis`,
		`baptistanggal`,
		`baptistahun`,
		`baptisgereja`,
		`baptispendeta`,
		`baptisdewasa`,
		`baptisdewasatanggal`,
		`baptisdewasatahun`,
		`baptisdewasagereja`,
		`baptisdewasapendeta`,
		`nomorsidi`,
		`siditanggal`,
		`siditahun`,
		`sidigereja`,
		`sidipendeta`,
		`nomoratesimasuk`,
		`atesimasuktanggal`,
		`atesimasuktahun`,
		`atesimasukgereja`,
		`nomoratesikeluar`,
		`atesikeluartanggal`,
		`atesikeluartahun`,
		`atesikeluargereja`,
		`wafat`,
		`wafattanggal`,
		`wafattahun`,
		`wafattempat`,
		`marital`,
		`nikah`,
		`nikahtanggal`,
		`nikahtahun`,
		`nikahgereja`,
		`nikahpendeta`,
		`catatansipil`,
		`catatansipiltanggal`,
		`catatansipiltahun`,
		`catatansipiltempat`,
		`kua`,
		`kuatanggal`,
		`kuatahun`,
		`kuatempat`,
		`cerai`,
		`ceraitanggal`,
		`ceraitahun`,
		`ceraitempat`,
		`pasangan`,
		`anakkandung`,
		`anaktanggungan`,
		`ayah`,
		`ayahwafat`,
		`ibu`,
		`ibuwafat`,
		`anakke`,
		`nomorkk`,
		`statuskk`,
		`gelar`,
		`pekerjaan`,
		`instansi`,
		`jabatan`,
		`kantoralamat`,
		`kantorkotamadya`,
		`kantorkodepos`,
		`kantortelepon`,
		`kantorfax`,
		`kantoremail`,
		`kantorwebsite`,
		`penghasilan`,
		`nomorpersembahan`,
		`catatan1`,
		`catatan2`,
		`foto`,
		`first_entry`,
		`first_log`,
		`update_entry`,
		`update_log`,
		`namaadmin`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($sql);
    
}
 else {
    $sql = "SELECT * FROM `personal`";
    $search_result = filterTable($sql);
}

// function to connect and execute the query
function filterTable($sql)
{
    $koneksi = mysqli_connect("localhost", "root", "", "gkipalsigunung");
    $filter_Result = mysqli_query($koneksi, $sql);
    return $filter_Result;
}
//TESTCODE

?>


<div class="container" style="margin-top:20px; widtd: 100%;">
	<center>
		<font size="6">Database Jemaat</font>
	</center>
	<hr>
	<!-- <a href="index.php?page=tambah_personal"><button class="btn btn-dark right">Tambah Data</button></a> -->
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action" ; style="text-align:center">
			<thead>
				<tr style="line-height:25px;">
					<th style="vertical-align:middle">Nomor</th>
					<th style="vertical-align:middle">Nomor&nbsp;Induk</th>
					<th style="vertical-align:middle">Nama&nbsp;Lengkap</th>
					<th style="vertical-align:middle">Jenis&nbsp;Kelamin</th>
					<th style="vertical-align:middle">Suku/Etnis</th>
					<th style="vertical-align:middle">Tempat&nbsp;Lahir</th>
					<th style="vertical-align:middle">Tanggal&nbsp;Lahir</th>
					<th style="vertical-align:middle">Golongan&nbsp;Darah</th>
					<th style="vertical-align:middle">Rhesus</th>
					<th style="vertical-align:middle">Status&nbsp;Jemaat</th>
					<th style="vertical-align:middle">Status&nbsp;Rumah</th>
					<th style="vertical-align:middle">Alamat</th>
					<th style="vertical-align:middle">RT</th>
					<th style="vertical-align:middle">RW</th>
					<th style="vertical-align:middle">Kelurahan</th>
					<th style="vertical-align:middle">Kecamatan</th>
					<th style="vertical-align:middle">Kota Madya</th>
					<th style="vertical-align:middle">Kode POS</th>
					<th style="vertical-align:middle">Telepon</th>
					<th style="vertical-align:middle">Fax</th>
					<th style="vertical-align:middle">Nomor HP</th>
					<th style="vertical-align:middle">Email</th>
					<th style="vertical-align:middle">Wilayah</th>
					<th style="vertical-align:middle">Kelompok</th>
					<th style="vertical-align:middle">Status Warga</th>
					<th style="vertical-align:middle">Tanggal Warga</th>
					<th style="vertical-align:middle">Nomor Baptis</th>
					<th style="vertical-align:middle">Baptis Tanggal</th>
					<th style="vertical-align:middle">Baptis Tahun</th>
					<th style="vertical-align:middle">Baptis Gereja</th>
					<th style="vertical-align:middle">Baptis Pendeta</th>
					<th style="vertical-align:middle">Baptis Dewasa</th>
					<th style="vertical-align:middle">Baptis Dewasa Tanggal</th>
					<th style="vertical-align:middle">Baptis Dewasa Tahun</th>
					<th style="vertical-align:middle">Baptis Dewasa Gereja</th>
					<th style="vertical-align:middle">Baptis Dewasa Pendeta</th>
					<th style="vertical-align:middle">Nomor Sidi</th>
					<th style="vertical-align:middle">Sidi Tanggal</th>
					<th style="vertical-align:middle">Sidi Tahun</th>
					<th style="vertical-align:middle">Sidi Gereja</th>
					<th style="vertical-align:middle">Sidi Pendeta</th>
					<th style="vertical-align:middle">Nomor Atesi Masuk</th>
					<th style="vertical-align:middle">Atesi Masuk Tanggal</th>
					<th style="vertical-align:middle">Atesi Masuk Tahun</th>
					<th style="vertical-align:middle">Atesi Masuk Gereja</th>
					<th style="vertical-align:middle">Nomor Atesi Keluar</th>
					<th style="vertical-align:middle">Atesi Keluar Tanggal</th>
					<th style="vertical-align:middle">Atesi Keluar Tahun</th>
					<th style="vertical-align:middle">Atesi Keluar Gereja</th>
					<th style="vertical-align:middle">Wafat</th>
					<th style="vertical-align:middle">Wafat Tanggal</th>
					<th style="vertical-align:middle">Wafat Tahun</th>
					<th style="vertical-align:middle">Wafat Tempat</th>
					<th style="vertical-align:middle">Marital</th>
					<th style="vertical-align:middle">Nikah</th>
					<th style="vertical-align:middle">Nikah Tanggal</th>
					<th style="vertical-align:middle">Nikah Tahun</th>
					<th style="vertical-align:middle">Nikah Gereja</th>
					<th style="vertical-align:middle">Nikah Pendeta</th>
					<th style="vertical-align:middle">Catatan Sipil</th>
					<th style="vertical-align:middle">Catatan Sipil Tanggal</th>
					<th style="vertical-align:middle">Catatan Sipil Tahun</th>
					<th style="vertical-align:middle">Catatan Sipil Tempat</th>
					<th style="vertical-align:middle">KUA</th>
					<th style="vertical-align:middle">KUA Tanggal</th>
					<th style="vertical-align:middle">KUA Tahun</th>
					<th style="vertical-align:middle">KUA Tempat</th>
					<th style="vertical-align:middle">Cerai</th>
					<th style="vertical-align:middle">Cerai Tanggal</th>
					<th style="vertical-align:middle">Cerai Tahun</th>
					<th style="vertical-align:middle">Cerai Tempat</th>
					<th style="vertical-align:middle">Pasangan</th>
					<th style="vertical-align:middle">Anak Kandung</th>
					<th style="vertical-align:middle">Anak Tanggungan</th>
					<th style="vertical-align:middle">Ayah</th>
					<th style="vertical-align:middle">Status Ayah</th>
					<th style="vertical-align:middle">Ibu</th>
					<th style="vertical-align:middle">Status Ibu</th>
					<th style="vertical-align:middle">Anak Ke</th>
					<th style="vertical-align:middle">Nomor KK</th>
					<th style="vertical-align:middle">Status KK</th>
					<th style="vertical-align:middle">Gelar</th>
					<th style="vertical-align:middle">Pekerjaan</th>
					<th style="vertical-align:middle">Instansi</th>
					<th style="vertical-align:middle">Jabatan</th>
					<th style="vertical-align:middle">Alamat Kantor</th>
					<th style="vertical-align:middle">Kantor Kota Madya</th>
					<th style="vertical-align:middle">Kantor Kode Pos</th>
					<th style="vertical-align:middle">Kantor Telepon</th>
					<th style="vertical-align:middle">Kantor Fax</th>
					<th style="vertical-align:middle">Kantor Email</th>
					<th style="vertical-align:middle">Kantor Website</th>
					<th style="vertical-align:middle">Penghasilan</th>
					<th style="vertical-align:middle">Nomor Persembahan</th>
					<th style="vertical-align:middle">Catatan 1</th>
					<th style="vertical-align:middle">Catatan 2</th>
					<th style="vertical-align:middle">Foto</th>
					<th style="vertical-align:middle">First Entry</th>
					<th style="vertical-align:middle">First Log</th>
					<th style="vertical-align:middle">Update Entry</th>
					<th style="vertical-align:middle">Update Log</th>
					<th style="vertical-align:middle">Admin</th>
					<th style="vertical-align:middle">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM personal ORDER BY nomorinduk DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td style="vertical-align:middle">'.$no.'</td>
							<td style="vertical-align:middle">'.$data['nomorinduk'].'</td>
							<td style="vertical-align:middle">'.$data['namalengkap'].'</td>
							<td style="vertical-align:middle">'.$data['jeniskelamin'].'</td>
							<td style="vertical-align:middle">'.$data['sukuetnis'].'</td>
							<td style="vertical-align:middle">'.$data['tempatlahir'].'</td>
							<td style="vertical-align:middle">'.$data['tanggallahir'].'</td>
							<td style="vertical-align:middle">'.$data['golongandarah'].'</td>
							<td style="vertical-align:middle">'.$data['rhesus'].'</td>
							<td style="vertical-align:middle">'.$data['statusjemaat'].'</td>
							<td style="vertical-align:middle">'.$data['statusrumah'].'</td>
							<td style="vertical-align:middle">'.$data['alamat'].'</td>
							<td style="vertical-align:middle">'.$data['rt'].'</td>
							<td style="vertical-align:middle">'.$data['rw'].'</td>
							<td style="vertical-align:middle">'.$data['kelurahan'].'</td>
							<td style="vertical-align:middle">'.$data['kecamatan'].'</td>
							<td style="vertical-align:middle">'.$data['kotamadya'].'</td>
							<td style="vertical-align:middle">'.$data['kodepos'].'</td>
							<td style="vertical-align:middle">'.$data['telepon'].'</td>
							<td style="vertical-align:middle">'.$data['fax'].'</td>
							<td style="vertical-align:middle">'.$data['nomorhp'].'</td>
							<td style="vertical-align:middle">'.$data['email'].'</td>
							<td style="vertical-align:middle">'.$data['wilayah'].'</td>
							<td style="vertical-align:middle">'.$data['kelompok'].'</td>
							<td style="vertical-align:middle">'.$data['statuswarga'].'</td>
							<td style="vertical-align:middle">'.$data['tanggalwarga'].'</td>
							<td style="vertical-align:middle">'.$data['nomorbaptis'].'</td>
							<td style="vertical-align:middle">'.$data['baptistanggal'].'</td>
							<td style="vertical-align:middle">'.$data['baptistahun'].'</td>
							<td style="vertical-align:middle">'.$data['baptisgereja'].'</td>
							<td style="vertical-align:middle">'.$data['baptispendeta'].'</td>
							<td style="vertical-align:middle">'.$data['baptisdewasa'].'</td>
							<td style="vertical-align:middle">'.$data['baptisdewasatanggal'].'</td>
							<td style="vertical-align:middle">'.$data['baptisdewasatahun'].'</td>
							<td style="vertical-align:middle">'.$data['baptisdewasagereja'].'</td>
							<td style="vertical-align:middle">'.$data['baptisdewasapendeta'].'</td>
							<td style="vertical-align:middle">'.$data['nomorsidi'].'</td>
							<td style="vertical-align:middle">'.$data['siditanggal'].'</td>
							<td style="vertical-align:middle">'.$data['siditahun'].'</td>
							<td style="vertical-align:middle">'.$data['sidigereja'].'</td>
							<td style="vertical-align:middle">'.$data['sidipendeta'].'</td>
							<td style="vertical-align:middle">'.$data['nomoratesimasuk'].'</td>
							<td style="vertical-align:middle">'.$data['atesimasuktanggal'].'</td>
							<td style="vertical-align:middle">'.$data['atesimasuktahun'].'</td>
							<td style="vertical-align:middle">'.$data['atesimasukgereja'].'</td>
							<td style="vertical-align:middle">'.$data['nomoratesikeluar'].'</td>
							<td style="vertical-align:middle">'.$data['atesikeluartanggal'].'</td>
							<td style="vertical-align:middle">'.$data['atesikeluartahun'].'</td>
							<td style="vertical-align:middle">'.$data['atesikeluargereja'].'</td>
							<td style="vertical-align:middle">'.$data['wafat'].'</td>
							<td style="vertical-align:middle">'.$data['wafattanggal'].'</td>
							<td style="vertical-align:middle">'.$data['wafattahun'].'</td>
							<td style="vertical-align:middle">'.$data['wafattempat'].'</td>
							<td style="vertical-align:middle">'.$data['marital'].'</td>
							<td style="vertical-align:middle">'.$data['nikah'].'</td>
							<td style="vertical-align:middle">'.$data['nikahtanggal'].'</td>
							<td style="vertical-align:middle">'.$data['nikahtahun'].'</td>
							<td style="vertical-align:middle">'.$data['nikahgereja'].'</td>
							<td style="vertical-align:middle">'.$data['nikahpendeta'].'</td>
							<td style="vertical-align:middle">'.$data['catatansipil'].'</td>
							<td style="vertical-align:middle">'.$data['catatansipiltanggal'].'</td>
							<td style="vertical-align:middle">'.$data['catatansipiltahun'].'</td>
							<td style="vertical-align:middle">'.$data['catatansipiltempat'].'</td>
							<td style="vertical-align:middle">'.$data['kua'].'</td>
							<td style="vertical-align:middle">'.$data['kuatanggal'].'</td>
							<td style="vertical-align:middle">'.$data['kuatahun'].'</td>
							<td style="vertical-align:middle">'.$data['kuatempat'].'</td>
							<td style="vertical-align:middle">'.$data['cerai'].'</td>
							<td style="vertical-align:middle">'.$data['ceraitanggal'].'</td>
							<td style="vertical-align:middle">'.$data['ceraitahun'].'</td>
							<td style="vertical-align:middle">'.$data['ceraitempat'].'</td>
							<td style="vertical-align:middle">'.$data['pasangan'].'</td>
							<td style="vertical-align:middle">'.$data['anakkandung'].'</td>
							<td style="vertical-align:middle">'.$data['anaktanggungan'].'</td>
							<td style="vertical-align:middle">'.$data['ayah'].'</td>
							<td style="vertical-align:middle">'.$data['ayahwafat'].'</td>
							<td style="vertical-align:middle">'.$data['ibu'].'</td>
							<td style="vertical-align:middle">'.$data['ibuwafat'].'</td>
							<td style="vertical-align:middle">'.$data['anakke'].'</td>
							<td style="vertical-align:middle">'.$data['nomorkk'].'</td>
							<td style="vertical-align:middle">'.$data['statuskk'].'</td>
							<td style="vertical-align:middle">'.$data['gelar'].'</td>
							<td style="vertical-align:middle">'.$data['pekerjaan'].'</td>
							<td style="vertical-align:middle">'.$data['instansi'].'</td>
							<td style="vertical-align:middle">'.$data['jabatan'].'</td>
							<td style="vertical-align:middle">'.$data['kantoralamat'].'</td>
							<td style="vertical-align:middle">'.$data['kantorkotamadya'].'</td>
							<td style="vertical-align:middle">'.$data['kantorkodepos'].'</td>
							<td style="vertical-align:middle">'.$data['kantortelepon'].'</td>
							<td style="vertical-align:middle">'.$data['kantorfax'].'</td>
							<td style="vertical-align:middle">'.$data['kantoremail'].'</td>
							<td style="vertical-align:middle">'.$data['kantorwebsite'].'</td>
							<td style="vertical-align:middle">'.$data['penghasilan'].'</td>
							<td style="vertical-align:middle">'.$data['nomorpersembahan'].'</td>
							<td style="vertical-align:middle">'.$data['catatan1'].'</td>
							<td style="vertical-align:middle">'.$data['catatan2'].'</td>
							<td style="vertical-align:middle">'.$data['foto'].'</td>
							<td style="vertical-align:middle">'.$data['first_entry'].'</td>
							<td style="vertical-align:middle">'.$data['first_log'].'</td>
							<td style="vertical-align:middle">'.$data['update_entry'].'</td>
							<td style="vertical-align:middle">'.$data['update_log'].'</td>
							<td style="vertical-align:middle">'.$data['namaadmin'].'</td>
							<td style="vertical-align:middle">
								<a href="index.php?page=edit_personal&nomorinduk='.$data['nomorinduk'].'" class="btn btn-secondary btn-sm">Edit</a>
								<a href="personal_hapus.php?nomorinduk='.$data['nomorinduk'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				
				?>
			<tbody>
		</table>
	</div>
</div>
