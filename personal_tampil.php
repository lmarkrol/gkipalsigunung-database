<?php
//memasukkan file config.php
include('config.php');
?>


<div class="container" style="margin-top:20px; width: 100%;">
	<center>
		<font size="6">Data Personal</font>
	</center>
	<hr>
	<!-- <a href="index.php?page=tambah_personal"><button class="btn btn-dark right">Tambah Data</button></a> -->
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action" ; style="text-align:center">
			<thead>
				<tr style="line-height:25px;">
					<th style="vertical-align:middle">Nomor</th>
					<th style="vertical-align:middle">Nomor&nbsp;Induk</th>
					<th style="vertical-align:middle">Aktif&nbsp;Berjemaat</th>
					<th style="vertical-align:middle">Nama&nbsp;Lengkap</th>
					<th style="vertical-align:middle">Jenis&nbsp;Kelamin</th>
					<th style="vertical-align:middle">Suku/Etnis</th>
					<th style="vertical-align:middle">Tempat&nbsp;Lahir</th>
					<th style="vertical-align:middle">Tanggal&nbsp;Lahir</th>
					<th style="vertical-align:middle">Golongan&nbsp;Darah</th>
					<th style="vertical-align:middle">Rhesus</th>
					<th style="vertical-align:middle">Alamat</th>
					<th style="vertical-align:middle">Wilayah</th>
					<th style="vertical-align:middle">Kelompok</th>
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
							<td style="vertical-align:middle">'.$data['statusjemaat'].'</td>
							<td style="vertical-align:middle">'.$data['namalengkap'].'</td>
							<td style="vertical-align:middle">'.$data['jeniskelamin'].'</td>
							<td style="vertical-align:middle">'.$data['sukuetnis'].'</td>
							<td style="vertical-align:middle">'.$data['tempatlahir'].'</td>
							<td style="vertical-align:middle">'.$data['tanggallahir'].'</td>
							<td style="vertical-align:middle">'.$data['golongandarah'].'</td>
							<td style="vertical-align:middle">'.$data['rhesus'].'</td>
							<td style="vertical-align:middle">'.$data['alamat'].'</td>
							<td style="vertical-align:middle">'.$data['wilayah'].'</td>
							<td style="vertical-align:middle">'.$data['kelompok'].'</td>
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
