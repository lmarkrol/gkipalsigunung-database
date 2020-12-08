<?php
//memasukkan file config.php
include('config.php');
?>


<div class="container" style="margin-top:20px; width: 100%;">
	<center>
		<font size="6">Data Pekerjaan</font>
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
					<th style="vertical-align:middle">Pekerjaan/Profesi yang digeluti</th>
					<th style="vertical-align:middle">Nama Perusahaan/Instansi</th>				
					<th style="vertical-align:middle">Jabatan/Bagian/Divisi/Pangkat</th>
					<th style="vertical-align:middle">Alamat Tempat Bekerja</th>
					<th style="vertical-align:middle">Kotamadya - Provinsi</th>
					<th style="vertical-align:middle">Kode Pos</th>
					<th style="vertical-align:middle">Nomor Telepon</th>
					<th style="vertical-align:middle">Nomor Faksimili</th>
					<th style="vertical-align:middle">Alamat E-mail</th>
					<th style="vertical-align:middle">Situs Internet (Website)</th>
					<th style="vertical-align:middle">Perkiraan Penghasilan Perbulan</th>
				
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
