<?php
//memasukkan file config.php
include('config.php');
?>


<div class="container" style="margin-top:20px; width: 100%;">
	<center>
		<font size="6">Data Marital</font>
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
					<th style="vertical-align:middle">Status&nbsp;Marital</th>
					<th style="vertical-align:middle">Nama&nbsp;Suami/Istri</th>
				
				<td>
					<th style="vertical-align:middle">Nomor&nbsp;Surat Nikah</th>
					<th style="vertical-align:middle">Tanggal</th>
					<th style="vertical-align:middle">Tahun</th>
					<th style="vertical-align:middle">Nama&nbsp;Gereja&nbsp;&&nbsp;Tempat</th>
					<th style="vertical-align:middle">Nama&nbsp;Pendeta</th>
				</td>
				<td>
					<th style="vertical-align:middle">Nomor&nbsp;Akte&nbsp;Catatan&nbsp;Sipil</th>
					<th style="vertical-align:middle">Tanggal</th>
					<th style="vertical-align:middle">Tahun</th>
					<th style="vertical-align:middle">Nama&nbsp;Tempat</th>
				</td>
				<td>
					<th style="vertical-align:middle">Nomor&nbsp;Surat&nbsp;KUA</th>
					<th style="vertical-align:middle">Tanggal</th>
					<th style="vertical-align:middle">Tahun</th>
					<th style="vertical-align:middle">Nama&nbsp;Tempat</th>
					<th style="vertical-align:middle">Nama&nbsp;Pendeta</th>
				</td>
				<td>
					<th style="vertical-align:middle">Nomor&nbsp;Surat&nbsp;Cerai</th>
					<th style="vertical-align:middle">Tanggal</th>
					<th style="vertical-align:middle">Tahun</th>
					<th style="vertical-align:middle">Nama&nbsp;Tempat</th>
				</td>
				<td>
					<th style="vertical-align:middle">Jumlah&nbsp;Anak&nbsp;Kandung</th>
					<th style="vertical-align:middle">Jumlah&nbsp;Anak&nbsp;Tanggungan</th>
					<th style="vertical-align:middle">Dalam&nbsp;Keluarga&nbsp;Anak&nbsp;ke</th>
				</td>
				<td>
					<th style="vertical-align:middle">Nama&nbsp;Orang&nbsp;Tua&nbsp;Laki-Laki</th>
					<th style="vertical-align:middle">Telah&nbsp;Wafat</th>
				</td>
				<td>
					<th style="vertical-align:middle">Nama&nbsp;Orang&nbsp;Tua&nbsp;Perempuan</th>
					<th style="vertical-align:middle">Telah&nbsp;Wafat</th>
				</td>
				<!-- <td>
					<th style="vertical-align:middle">Admin</th>
					<th style="vertical-align:middle">Aksi</th>
				</td> -->
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
							<td style="vertical-align:middle">'.$data['marital'].'</td>
							<td style="vertical-align:middle">'.$data['pasangan'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['nikah'].'</td>
							<td style="vertical-align:middle">'.$data['nikahtanggal'].'</td>
							<td style="vertical-align:middle">'.$data['nikahtahun'].'</td>
							<td style="vertical-align:middle">'.$data['nikahgereja'].'</td>
							<td style="vertical-align:middle">'.$data['nikahpendeta'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['catatansipil'].'</td>
							<td style="vertical-align:middle">'.$data['catatansipiltanggal'].'</td>
							<td style="vertical-align:middle">'.$data['catatansipiltahun'].'</td>
							<td style="vertical-align:middle">'.$data['catatansipiltempat'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['kua'].'</td>
							<td style="vertical-align:middle">'.$data['kuatanggal'].'</td>
							<td style="vertical-align:middle">'.$data['kuatahun'].'</td>
							<td style="vertical-align:middle">'.$data['kuatempat'].'</td>
							<td style="vertical-align:middle">'.$data['kuapendeta'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['cerai'].'</td>
							<td style="vertical-align:middle">'.$data['ceraitanggal'].'</td>
							<td style="vertical-align:middle">'.$data['ceraitahun'].'</td>
							<td style="vertical-align:middle">'.$data['ceraitempat'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['anakkandung'].'</td>
							<td style="vertical-align:middle">'.$data['anaktanggungan'].'</td>
							<td style="vertical-align:middle">'.$data['anakke'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['ayah'].'</td>
							<td style="vertical-align:middle">'.$data['ayahwafat'].'</td>
							<td></td>
							<td style="vertical-align:middle">'.$data['ibu'].'</td>
							<td style="vertical-align:middle">'.$data['ibuwafat'].'</td>
							
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
