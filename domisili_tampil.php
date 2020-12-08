<?php
//memasukkan file config.php
include('config.php');
?>


<div class="container" style="margin-top:20px; width: 100%;">
	<center>
		<font size="6">Data Domisili</font>
	</center>
	<hr>
	<!-- <a href="index.php?page=tambah_domisili"><button class="btn btn-dark right">Tambah Data</button></a> -->
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action" ; style="text-align:center">
			<thead>
				<tr style="line-height:25px;">
				<th style="vertical-align:middle">Nomor</th>
				<th style="vertical-align:middle">Nomor&nbsp;Induk</th>
				<th style="vertical-align:middle">Nama&nbsp;Lengkap</th>
					<th style="vertical-align:middle">Status Rumah</th>
					<th style="vertical-align:middle">Alamat</th>
					<th style="vertical-align:middle">RT</th>
					<th style="vertical-align:middle">RW</th>
					<th style="vertical-align:middle">Kelurahan</th>
					<th style="vertical-align:middle">Kecamatan</th>
					<th style="vertical-align:middle">Kota Madya</th>
					<th style="vertical-align:middle">Kode Pos</th>
					<th style="vertical-align:middle">Nomor HP</th>
					<th style="vertical-align:middle">Email</th>
					<th style="vertical-align:middle">Telepon</th>
					<th style="vertical-align:middle">Fax</th>
					<!-- <th style="vertical-align:middle">Admin</th>
					<th style="vertical-align:middle">Aksi</th> -->
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel personal urut berdasarkan id yang paling besar
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
							<td style="vertical-align:middle">'.$data['statusrumah'].'</td>
							<td style="vertical-align:middle">'.$data['alamat'].'</td>
							<td style="vertical-align:middle">'.$data['rt'].'</td>
							<td style="vertical-align:middle">'.$data['rw'].'</td>
							<td style="vertical-align:middle">'.$data['kelurahan'].'</td>
							<td style="vertical-align:middle">'.$data['kecamatan'].'</td>
							<td style="vertical-align:middle">'.$data['kotamadya'].'</td>
							<td style="vertical-align:middle">'.$data['kodepos'].'</td>
							<td style="vertical-align:middle">'.$data['nomorhp'].'</td>
							<td style="vertical-align:middle">'.$data['email'].'</td>
							<td style="vertical-align:middle">'.$data['telepon'].'</td>
							<td style="vertical-align:middle">'.$data['fax'].'</td>
							
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
