<?php
//memasukkan file config.php
include('config.php');
?>


<div class="container" style="margin-top:20px; width: 100%;">
	<center>
		<font size="6">Data Persembahan</font>
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
					<th style="vertical-align:middle">Nomor Kartu Persembahan</th>
					<th style="vertical-align:middle">Bulan</th>				
					<th style="vertical-align:middle">Tahun</th>
					<th style="vertical-align:middle">Persembahan Bulanan</th>
					<th style="vertical-align:middle">Persembahan Syukur</th>
					<th style="vertical-align:middle">Persembahan Lain (STT,PGI,LAI, dll)</th>
					<th style="vertical-align:middle">Jumlah</th>
				
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
							<td style="vertical-align:middle">'.$data['nomorpersembahan'].'</td>
							<td style="vertical-align:middle">'.$data['bulanpersembahan'].'</td>
							<td style="vertical-align:middle">'.$data['tahunpersembahan'].'</td>
							<td style="vertical-align:middle">'.$data['persembahanbulanan'].'</td>
							<td style="vertical-align:middle">'.$data['persembahansyukur'].'</td>
							<td style="vertical-align:middle">'.$data['persembahanlain'].'</td>
							<td style="vertical-align:middle">'.$data['jumlah'].'</td>
							
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
