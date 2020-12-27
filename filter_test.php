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
        `telepon`) LIKE '%".$valueToSearch."%'";
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

                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>