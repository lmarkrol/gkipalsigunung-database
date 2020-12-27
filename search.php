<?php
//Menggabungkan dengan file koneksi yang telah kita buat
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Search PHP - www.dewankomputer.com</title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>
	
	<div class="container">
		<h2 align="center" style="margin: 30px;">Filter &amp; Search pada PHP ke Semua Kolom</h2>
		<?php 
			$s_jurusan="";
            $s_keyword="";
            if (isset($_POST['search'])) {
                $s_jurusan = $_POST['s_jurusan'];
                $s_keyword = $_POST['s_keyword'];
            }
		?>
		<form method="POST" action="">
	        <div class="row mb-3">
			    <div class="col-sm-12"><h4>Cari</h4></div>
			    <div class="col-sm-3">
			        <div class="form-group">
			            <select name="s_jurusan" id="s_jurusan" class="form-control">
			                <option value="">Filter Jurusan</option>
			                <option value="Sistem Informasi" <?php if ($s_jurusan=="Sistem Informasi"){ echo "selected"; } ?>>Sistem Informasi</option>
			                <option value="Teknik Informatika" <?php if ($s_jurusan=="Teknik Informatika"){ echo "selected"; } ?>>Teknik Informatika</option>
			            </select>
			        </div>
			    </div>
			    <div class="col-sm-4">
			        <div class="form-group">
			            <input type="text" placeholder="Keyword" name="s_keyword" id="s_keyword" class="form-control" value="<?php echo $s_keyword; ?>">
			        </div>
			    </div>
			    <div class="col-sm-4" >
			        <button id="search" name="search" class="btn btn-warning">Cari</button>
			    </div>
			</div>
		</form>

		<table class="table table-striped table-bordered" style="width:100%">
		    <thead>
		        <tr>
		            <td>Nomor Induk</td>
		            <td>Nama Lengkap</td>
		            <td>Jenis Kelamin</td>
		            <td>Suku/Etnis</td>
		            <td>Tempat Lahir</td>
		            <td>Tanggal lahir</td>
		        </tr>
		    </thead>
		    <tbody>
		        <?php
		            $search_jurusan = '%'. $s_jurusan .'%';
		            $search_keyword = '%'. $s_keyword .'%';
		            $no = 1;
		            $query = "SELECT * FROM personal WHERE jurusan LIKE ? AND (namalengkap LIKE ? OR jeniskelamin LIKE ? OR sukuetnis LIKE ? OR tempatlahir LIKE ? OR tanggallahir LIKE ?) ORDER BY id DESC";
		            $dewan1 = $koneksi->prepare($query);
		            $dewan1->bind_param('ssssss', $search_jurusan, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
		            $dewan1->execute();
		            $res1 = $dewan1->get_result();

		            if ($res1->num_rows > 0) {
		                while ($row = $res1->fetch_assoc()) {
		                    $id = $row['id'];
		                    $namalengkap = $row['namalengkap'];
		                    $jeniskelamin = $row['jeniskelamin'];
		                    $sukuetnis = $row['sukuetnis'];
		                    $tempatlahir = $row['tempatlahir'];
		                    $tanggallahir = $row['tanggallahir'];
		        ?>
		            <tr>
		                <td><?php echo $no++; ?></td>
		                <td><?php echo $namalengkap; ?></td>
		                <td><?php echo $jeniskelamin; ?></td>
		                <td><?php echo $sukuetnis; ?></td>
		                <td><?php echo $tempatlahir; ?></td>
		                <td><?php echo $tanggallahir; ?></td>
		            </tr>
		        <?php } } else { ?> 
		            <tr>
		                <td colspan='7'>Tidak ada data ditemukan</td>
		            </tr>
		        <?php } ?>
		    </tbody>
		</table>
		
    </div>

    <div class="text-center">© <?php echo date('Y'); ?> Copyright:
	    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>