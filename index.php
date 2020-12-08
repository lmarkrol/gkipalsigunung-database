<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/favicon.png" type="image/ico" />

    <title> Database GKI Palsigunung </title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/all.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome-old/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <center>
            <a href="index.php" class="site_title"><img src="assets/images/logo_gki.png" style="width:45px;height:45px;"> <span style="text-transform: uppercase; font-size:17px; font-weight:bold">GKI Palsigunung</span></a>
            <!-- &nbsp; <a href="index.php" class="fa fa-mortar-board fa-2x" style="color:#fff;"><span><font size="4.95" color="white" face="Helvetica Neue">APLIKASI AKADEMIK</font></span></a> -->
            </center>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/images/image.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>Roberto Markus</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fas fa-church"></i>&emsp;Beranda <span class="fa fa-chevron"></span></a>
                  </li>
                  <li><a><i class="fas fa-project-diagram"></i>&emsp;Proses Data Jemaat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=data_tambah">Tambah Data</a></li>
                      <li><a href="#">Filter & Edit Data</a></li>
                      <li><a href="#">Ekspor Data</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-calendar-alt"></i>&thinsp;Database Jemaat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=personal_data">Personal</a></li>
                      <li><a href="index.php?page=domisili_data">Domisili</a></li>
                      <li><a href="index.php?page=gerejawi_data">Gerejawi</a></li>
                      <li><a href="index.php?page=marital_data">Marital</a></li>
                      <li><a href="index.php?page=keluarga_data">Keluarga</a></li>
                      <li><a href="index.php?page=pendidikan_data">Pendidikan</a></li>
                      <li><a href="index.php?page=pekerjaan_data">Pekerjaan</a></li>
                      <li><a href="index.php?page=pelayanan_data">Pelayanan</a></li>
                      <li><a href="index.php?page=kegiatan_data">Kegiatan</a></li>
                      <li><a href="index.php?page=talentahobi_data">Talenta & Hobi</a></li>
                      <li><a href="index.php?page=persembahan_data">Persembahan</a></li>
                      <li><a href="index.php?page=catatan_data">Catatan</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-filter"></i>&thinsp;Filter Data Jemaat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Filter 1</a></li>
                      <li><a href="#">Filter 2</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-birthday-cake"></i>&thinsp;Filter Data Ulang Tahun<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=personal_data">Januari</a></li>
                      <li><a href="index.php?page=domisili_data">Februari</a></li>
                      <li><a href="index.php?page=gerejawi_data">Maret</a></li>
                      <li><a href="index.php?page=marital_data">April</a></li>
                      <li><a href="index.php?page=keluarga_data">Mei</a></li>
                      <li><a href="index.php?page=pendidikan_data">Juni</a></li>
                      <li><a href="index.php?page=pekerjaan_data">Juli</a></li>
                      <li><a href="index.php?page=pelayanan_data">Agustus</a></li>
                      <li><a href="index.php?page=kegiatan_data">September</a></li>
                      <li><a href="index.php?page=talentahobi_data">Oktober</a></li>
                      <li><a href="index.php?page=persembahan_data">November</a></li>
                      <li><a href="index.php?page=catatan_data">Desember</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-chart-bar"></i>&thinsp;Statistik Data Jemaat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Grafik Data</a></li>
                      <li><a href="#">Diagram Data</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fas fa-user-lock"></i>&emsp;Hak Akses Pengguna <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Filter 1</a></li>
                      <li><a href="#">Filter 2</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-gear"></i>&thinsp;Pengaturan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Settings 1</a></li>
                      <li><a href="#">Settings 2</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="#">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen" href="#">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock" href="#">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" >
                  <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/image.jpg" alt="">Roberto Markus
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="#"> Profile</a>
                      <a class="dropdown-item"  href="#">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    <a class="dropdown-item"  href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content - HALAMAN UTAMA ISI DISINI -->
        <div class="right_col" role="main">
      <?php
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      switch ($queries['page']) {
  // Proses Data
        case 'data_tambah':
      		# code...
      		include 'tambah_data.php';
          break;
        case 'data_filteredit':
      		# code...
      		include 'filteredit_data.php';
          break;
        case 'edit_data':
        		# code...
        	include 'data_edit.php';
        	break;
        case 'edit_data_save':
          		# code...
          include 'data_edit.php';
          break;
        case 'data_ekspor':
      		# code...
      		include 'ekspor_data.php';
          break;
  //Proses Data
  // Personal System
      	case 'personal_data':
      		# code...
      		include 'personal.php';
          break;
        case 'tampil_personal':
           # code...
          include 'personal_tampil.php';
           break;
        case 'edit_personal':
        		# code...
        	include 'personal_edit.php';
        	break;
        case 'edit_personal_save':
          		# code...
          include 'personal_edit.php';
          break;
  // Personal System
        
 // Domisili System
        case 'domisili_data':
           # code...
          include 'domisili.php';
           break;
        case 'tampil_domisili':
           # code...
          include 'domisili_tampil.php';
           break;
   // Domisili System

   // Gerejawi System
        case 'gerejawi_data':
          # code...
          include 'gerejawi.php';
           break;
        case 'tampil_gerejawi':
          # code...
          include 'gerejawi_tampil.php';
           break;
    // Gerejawi System

    // Marital System
        case 'marital_data':
          # code...
          include 'marital.php';
           break;
        case 'tampil_marital':
          # code...
          include 'marital_tampil.php';
           break;
     // Marital System

     
        case 'keluarga_data':
          # code...
          include 'keluarga.php';
           break;
        case 'pendidikan_data':
          # code...
          include 'pendidikan.php';
           break;
        case 'pekerjaan_data':
          # code...
          include 'pekerjaan.php';
           break;
        case 'pelayanan_data':
          # code...
          include 'pelayanan.php';
           break;
        case 'kegiatan_data':
          # code...
          include 'kegiatan.php';
           break;
        case 'talentahobi_data':
          # code...
          include 'talentahobi.php';
           break;
        case 'persembahan_data':
          # code...
          include 'persembahan.php';
           break;
        case 'catatan_data':
          # code...
          include 'catatan.php';
           break;
      	case 'tambah_mhs':
      		# code...
      		include 'tambah.php';
      		break;
        case 'edit_mhs':
        		# code...
        	include 'edit.php';
        	break;
        case 'edit_mhs_save':
          		# code...
          include 'edit.php';
          break;
        default:
		          #code...
		      include 'home.php';
		      break;
        }
        ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright &copy; 2020 GKI PALSIGUNUNG | <a href="https://www.facebook.com/markusrobertoo/" target="_blank">Roberto Markus</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="assets/skycons/skycons.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>

  </body>
</html>
