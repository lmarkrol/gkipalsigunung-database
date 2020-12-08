<?php
//memasukkan file config.php
include('config.php');
?>


<div class="container" style="margin-top:20px; width: 100%;">
	<center>
		<font size="6">Data Gerejawi</font>
	</center>
	<hr>
	<!-- <a href="index.php?page=tambah_mhs"><button class="btn btn-dark right">Tambah Data</button></a> -->
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action" ; style="text-align:center">
			<thead>
				<tr style="line-height:15px;">
					
					<th style="vertical-align:middle">Nomor</th>
					<th style="vertical-align:middle">Nomor&nbsp;Induk</th>
					<th style="vertical-align:middle">Nama&nbsp;Lengkap</th>
					<th style="vertical-align:middle">Status&nbsp;warga</th>
					<th style="vertical-align:middle">Tanggal&nbsp;Menjadi&nbsp;Warga</th>
				<td></td>
							
					<th style="vertical-align:middle">Nomor&nbsp;Surat&nbsp;Baptis</th>
					<th style="vertical-align:middle">Tanggal</th>
					<th style="vertical-align:middle">Tahun</th>
					<th style="vertical-align:middle">Nama&nbsp;Gereja&nbsp;&&nbsp;Tempat</th>
					<th style="vertical-align:middle">Nama&nbsp;Pendeta</th>
				
				<td></td>
					<th style="vertical-align:middle">Nomor&nbsp;Surat&nbsp;Baptis&nbsp;Dewasa</th>
					<th style="vertical-align:middle">Tanggal</th>
					<th style="vertical-align:middle">Tahun</th>
					<th style="vertical-align:middle">Nama&nbsp;Gereja&nbsp;&&nbsp;Tempat</th>
					<th style="vertical-align:middle">Nama&nbsp;Pendeta</th>
				
				<td></td>
					<th style="vertical-align:middle">Nomor&nbsp;Surat&nbsp;Sidi</th>
					<th style="vertical-align:middle">Tanggal</th>
					<th style="vertical-align:middle">Tahun</th>
					<th style="vertical-align:middle">Nama&nbsp;Gereja&nbsp;&&nbsp;Tempat</th>
					<th style="vertical-align:middle">Nama&nbsp;Pendeta</th>
				
				<td></td>
					<th style="vertical-align:middle">Nomor&nbsp;Atestasi&nbsp;Masuk</th>
					<th style="vertical-align:middle">Tanggal</th>
					<th style="vertical-align:middle">Tahun</th>
					<th style="vertical-align:middle">Nama&nbsp;Gereja&nbsp;&&nbsp;Tempat</th>
				
				<td></td>
					<th style="vertical-align:middle">Nomor&nbsp;Atestasi&nbsp;Keluar</th>
					<th style="vertical-align:middle">Tanggal</th>
					<th style="vertical-align:middle">Tahun</th>
					<th style="vertical-align:middle">Nama&nbsp;Gereja&nbsp;&&nbsp;Tempat</th>
				
				<td></td>
					<th style="vertical-align:middle">Telah&nbsp;Wafat</th>
					<th style="vertical-align:middle">Tanggal</th>
					<th style="vertical-align:middle">Tahun</th>
					<th style="vertical-align:middle">Tempat&nbsp;Pemakaman</th>
				
				<!-- <td></td>
					<th style="vertical-align:middle">Admin</th>
					<th style="vertical-align:middle">Aksi</th> -->
				
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
							<td style="vertical-align:middle">'.$data['statuswarga'].'</td>
							<td style="vertical-align:middle">'.$data['tanggalwarga'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['nomorbaptis'].'</td>
							<td style="vertical-align:middle">'.$data['baptistanggal'].'</td>
							<td style="vertical-align:middle">'.$data['baptistahun'].'</td>
							<td style="vertical-align:middle">'.$data['baptisgereja'].'</td>
							<td style="vertical-align:middle">'.$data['baptispendeta'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['baptisdewasa'].'</td>
							<td style="vertical-align:middle">'.$data['baptisdewasatanggal'].'</td>
							<td style="vertical-align:middle">'.$data['baptisdewasatahun'].'</td>
							<td style="vertical-align:middle">'.$data['baptisdewasagereja'].'</td>
							<td style="vertical-align:middle">'.$data['baptisdewasapendeta'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['nomorsidi'].'</td>
							<td style="vertical-align:middle">'.$data['siditanggal'].'</td>
							<td style="vertical-align:middle">'.$data['siditahun'].'</td>
							<td style="vertical-align:middle">'.$data['sidigereja'].'</td>
							<td style="vertical-align:middle">'.$data['sidipendeta'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['nomoratesimasuk'].'</td>
							<td style="vertical-align:middle">'.$data['atesimasuktanggal'].'</td>
							<td style="vertical-align:middle">'.$data['atesimasuktahun'].'</td>
							<td style="vertical-align:middle">'.$data['atesimasukgereja'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['nomoratesikeluar'].'</td>
							<td style="vertical-align:middle">'.$data['atesikeluartanggal'].'</td>
							<td style="vertical-align:middle">'.$data['atesikeluartahun'].'</td>
							<td style="vertical-align:middle">'.$data['atesikeluargereja'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['wafat'].'</td>
							<td style="vertical-align:middle">'.$data['wafattanggal'].'</td>
							<td style="vertical-align:middle">'.$data['wafattahun'].'</td>
							<td style="vertical-align:middle">'.$data['wafattempat'].'</td>
							
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
