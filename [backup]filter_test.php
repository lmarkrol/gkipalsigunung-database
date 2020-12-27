<?php

//TESTCODE
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `personal` WHERE CONCAT(
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
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `personal`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "gkipalsigunung");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
//TESTCODE

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="filter_test.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
            <tr>
                    <th>Nomor Induk</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Suku / Etnis</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Golongan Darah</th>
                    <th>Rhesus</th>
                    <th>Status Jemaat</th>
                    <th>Status Rumah</th>
                    <th>Alamat</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kota Madya</th>
                    <th>Kode POS</th>
                    <th>Telepon</th>
                    <th>Fax</th>
                    <th>Nomor HP</th>
                    <th>Email</th>
                    <th>Wilayah</th>
                    <th>Kelompok</th>
                    <th>Status Warga</th>
                    <th>Tanggal Warga</th>
                    <th>Nomor Baptis</th>
                    <th>Baptis Tanggal</th>
                    <th>Baptis Tahun</th>
                    <th>Baptis Gereja</th>
                    <th>Baptis Pendeta</th>
                    <th>Baptis Dewasa</th>
                    <th>Baptis Dewasa Tanggal</th>
                    <th>Baptis Dewasa Tahun</th>
                    <th>Baptis Dewasa Gereja</th>
                    <th>Baptis Dewasa Pendeta</th>
                    <th>Nomor Sidi</th>
                    <th>Sidi Tanggal</th>
                    <th>Sidi Tahun</th>
                    <th>Sidi Gereja</th>
                    <th>Sidi Pendeta</th>
                    <th>Nomor Atesi Masuk</th>
                    <th>Atesi Masuk Tanggal</th>
                    <th>Atesi Masuk Tahun</th>
                    <th>Atesi Masuk Gereja</th>
                    <th>Nomor Atesi Keluar</th>
                    <th>Atesi Keluar Tanggal</th>
                    <th>Atesi Keluar Tahun</th>
                    <th>Atesi Keluar Gereja</th>
                    <th>Wafat</th>
                    <th>Wafat Tanggal</th>
                    <th>Wafat Tahun</th>
                    <th>Wafat Tempat</th>
                    <th>Marital</th>
                    <th>Nikah</th>
                    <th>Nikah Tanggal</th>
                    <th>Nikah Tahun</th>
                    <th>Nikah Gereja</th>
                    <th>Nikah Pendeta</th>
                    <th>Catatan Sipil</th>
                    <th>Catatan Sipil Tanggal</th>
                    <th>Catatan Sipil Tahun</th>
                    <th>Catatan Sipil Tempat</th>
                    <th>KUA</th>
                    <th>KUA Tanggal</th>
                    <th>KUA Tahun</th>
                    <th>KUA Tempat</th>
                    <th>Cerai</th>
                    <th>Cerai Tanggal</th>
                    <th>Cerai Tahun</th>
                    <th>Cerai Tempat</th>
                    <th>Pasangan</th>
                    <th>Anak Kandung</th>
                    <th>Anak Tanggungan</th>
                    <th>Ayah</th>
                    <th>Status Ayah</th>
                    <th>Ibu</th>
                    <th>Status Ibu</th>
                    <th>Anak Ke</th>
                    <th>Nomor KK</th>
                    <th>Status KK</th>
                    <th>Gelar</th>
                    <th>Pekerjaan</th>
                    <th>Instansi</th>
                    <th>Jabatan</th>
                    <th>Kantor Alamat</th>
                    <th>Kantor Kota Madya</th>
                    <th>Kantor Kode Pos</th>
                    <th>Kantor Telepon</th>
                    <th>Kantor Fax</th>
                    <th>Kantor Email</th>
                    <th>Kantor Website</th>
                    <th>Penghasilan</th>
                    <th>Nomor Persembahan</th>
                    <th>Catatan 1</th>
                    <th>Catatan 2</th>
                    <th>Foto</th>
                    <th>First Entry</th>
                    <th>First Log</th>
                    <th>Update Entry</th>
                    <th>Update Log</th>
                    <th>Nama Admin</th>
                </tr>
      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_assoc($search_result)):?>
                <tr>
                    <td><?php echo $row['nomorinduk'];?></td>
                    <td><?php echo $row['namalengkap'];?></td>
                    <td><?php echo $row['jeniskelamin'];?></td>
                    <td><?php echo $row['sukuetnis'];?></td>
                    <td><?php echo $row['tempatlahir'];?></td>
                    <td><?php echo $row['tanggallahir'];?></td>
                    <td><?php echo $row['golongandarah'];?></td>
                    <td><?php echo $row['rhesus'];?></td>
                    <td><?php echo $row['statusjemaat'];?></td>
                    <td><?php echo $row['statusrumah'];?></td>
                    <td><?php echo $row['alamat'];?></td>
                    <td><?php echo $row['rt'];?></td>
                    <td><?php echo $row['rw'];?></td>
                    <td><?php echo $row['kelurahan'];?></td>
                    <td><?php echo $row['kecamatan'];?></td>
                    <td><?php echo $row['kotamadya'];?></td>
                    <td><?php echo $row['kodepos'];?></td>
                    <td><?php echo $row['telepon'];?></td>
                    <td><?php echo $row['fax'];?></td>
                    <td><?php echo $row['nomorhp'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['wilayah'];?></td>
                    <td><?php echo $row['kelompok'];?></td>
                    <td><?php echo $row['statuswarga'];?></td>
                    <td><?php echo $row['tanggalwarga'];?></td>
                    <td><?php echo $row['nomorbaptis'];?></td>
                    <td><?php echo $row['baptistanggal'];?></td>
                    <td><?php echo $row['baptistahun'];?></td>
                    <td><?php echo $row['baptisgereja'];?></td>
                    <td><?php echo $row['baptispendeta'];?></td>
                    <td><?php echo $row['baptisdewasa'];?></td>
                    <td><?php echo $row['baptisdewasatanggal'];?></td>
                    <td><?php echo $row['baptisdewasatahun'];?></td>
                    <td><?php echo $row['baptisdewasagereja'];?></td>
                    <td><?php echo $row['baptisdewasapendeta'];?></td>
                    <td><?php echo $row['nomorsidi'];?></td>
                    <td><?php echo $row['siditanggal'];?></td>
                    <td><?php echo $row['siditahun'];?></td>
                    <td><?php echo $row['sidigereja'];?></td>
                    <td><?php echo $row['sidipendeta'];?></td>
                    <td><?php echo $row['nomoratesimasuk'];?></td>
                    <td><?php echo $row['atesimasuktanggal'];?></td>
                    <td><?php echo $row['atesimasuktahun'];?></td>
                    <td><?php echo $row['atesimasukgereja'];?></td>
                    <td><?php echo $row['nomoratesikeluar'];?></td>
                    <td><?php echo $row['atesikeluartanggal'];?></td>
                    <td><?php echo $row['atesikeluartahun'];?></td>
                    <td><?php echo $row['atesikeluargereja'];?></td>
                    <td><?php echo $row['wafat'];?></td>
                    <td><?php echo $row['wafattanggal'];?></td>
                    <td><?php echo $row['wafattahun'];?></td>
                    <td><?php echo $row['wafattempat'];?></td>
                    <td><?php echo $row['marital'];?></td>
                    <td><?php echo $row['nikah'];?></td>
                    <td><?php echo $row['nikahtanggal'];?></td>
                    <td><?php echo $row['nikahtahun'];?></td>
                    <td><?php echo $row['nikahgereja'];?></td>
                    <td><?php echo $row['nikahpendeta'];?></td>
                    <td><?php echo $row['catatansipil'];?></td>
                    <td><?php echo $row['catatansipiltanggal'];?></td>
                    <td><?php echo $row['catatansipiltahun'];?></td>
                    <td><?php echo $row['catatansipiltempat'];?></td>
                    <td><?php echo $row['kua'];?></td>
                    <td><?php echo $row['kuatanggal'];?></td>
                    <td><?php echo $row['kuatahun'];?></td>
                    <td><?php echo $row['kuatempat'];?></td>
                    <td><?php echo $row['cerai'];?></td>
                    <td><?php echo $row['ceraitanggal'];?></td>
                    <td><?php echo $row['ceraitahun'];?></td>
                    <td><?php echo $row['ceraitempat'];?></td>
                    <td><?php echo $row['pasangan'];?></td>
                    <td><?php echo $row['anakkandung'];?></td>
                    <td><?php echo $row['anaktanggungan'];?></td>
                    <td><?php echo $row['ayah'];?></td>
                    <td><?php echo $row['ayahwafat'];?></td>
                    <td><?php echo $row['ibu'];?></td>
                    <td><?php echo $row['ibuwafat'];?></td>
                    <td><?php echo $row['anakke'];?></td>
                    <td><?php echo $row['nomorkk'];?></td>
                    <td><?php echo $row['statuskk'];?></td>
                    <td><?php echo $row['gelar'];?></td>
                    <td><?php echo $row['pekerjaan'];?></td>
                    <td><?php echo $row['instansi'];?></td>
                    <td><?php echo $row['jabatan'];?></td>
                    <td><?php echo $row['kantoralamat'];?></td>
                    <td><?php echo $row['kantorkotamadya'];?></td>
                    <td><?php echo $row['kantorkodepos'];?></td>
                    <td><?php echo $row['kantortelepon'];?></td>
                    <td><?php echo $row['kantorfax'];?></td>
                    <td><?php echo $row['kantoremail'];?></td>
                    <td><?php echo $row['kantorwebsite'];?></td>
                    <td><?php echo $row['penghasilan'];?></td>
                    <td><?php echo $row['nomorpersembahan'];?></td>
                    <td><?php echo $row['catatan1'];?></td>
                    <td><?php echo $row['catatan2'];?></td>
                    <td><?php echo $row['foto'];?></td>
                    <td><?php echo $row['first_entry'];?></td>
                    <td><?php echo $row['first_log'];?></td>
                    <td><?php echo $row['update_entry'];?></td>
                    <td><?php echo $row['update_log'];?></td>
                    <td><?php echo $row['namaadmin'];?></td>
                   
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>