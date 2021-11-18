<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ormawa</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
   
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="gambar/ipb.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="gambar/logo.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="gambar/logomicroit.png" alt="profile"/>
            </a>
            
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
     
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="prestasi.php">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title" >Prestasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="struktur.php">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Struktur Organisasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="prestasi.php">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Jadwal</span>
              
            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="berkas.php">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Berkas</span>
             
            </a>
           
          </li>
          
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Struktur Organisasi Micro IT</h3>
                  <h6 class="font-weight-normal mb-0">Selamat Datang ! terdapat <span class="text-primary">3 pesan belum dibaca</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          
         
           
          <?php 
    include 'crud_anggota/struktur_ormawa_micro.php'; 
    include 'spreadsheet/dataanggotamicro-toexcel.php';
    include 'spreadsheet/dataanggotamicro-todb.php';

    if (!empty($_POST)) {
      $mhs = new struktur_ormawa_micro($_POST['nim'], $_POST['nama'], $_POST['jenis_kelamin'], $_POST['jabatan'], $_POST['prodi'], $_POST['status']);

      $mhs->insert();
    }
    ?>
     <div class="container">
        
        <table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Prodi/angkatan</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>

      </tr>
      
    </thead>
      <tbody>

        <?php 
           $mhs = new struktur_ormawa_micro();     //Overloading
    
           $i = 1;
       
           foreach($mhs->read() as $m) :
           
        ?>

        <tr>
          <th scope="row"><?php echo $i++; ?></th>
          <td><?php echo $m->nim; ?></td>
          <td><?php echo $m->nama; ?></td>
          <td><?php echo $m->jenis_kelamin; ?></td>
          <td><?php echo $m->jabatan; ?></td>
          <td><?php echo $m->prodi; ?></td>
          <td><?php echo $m->status; ?></td>
          <td>
              <a href="crud_anggota/mhs_delete.php?nim=<?php echo $m->nim; ?>" class="btn btn-warning btn-sm" onclick ="return confirm('Apakah Anda Yakin?');">Edit</a>
              <a href="crud_anggota/delete_struktur_ormawa_micro.php?id=<?php echo $m->id; ?>" class="btn btn-danger btn-sm" onclick ="return confirm('Apakah Anda Yakin?');">Hapus</a>
          </td>
        </tr>

        <?php endforeach; ?>
        
      </tbody>
    </table>
    <div class="row">
        </div>
        <form method="POST" action="#">
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" class="form-control" name="nim">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" class="form-control" name="jabatan">
            </div>
            <div class="mb-3">
                <label class="form-label">Prodi/Angkatan</label>
                <input type="text" class="form-control" name="prodi">
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <input type="text" class="form-control" name="status">
            </div>
            <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" value="Pria" checked>
                  <label class="form-check-label">
                    Pria
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" value="Wanita">
                  <label class="form-check-label">
                    Wanita
                  </label>
                </div>
            </div>
            <div class="container px-4">
              <div class="row justify-content-between">
                <button type="submit" class="col-sm-3 border btn btn-primary" name="submit" value="submit">Submit</button>
               
              </div>
            </div>
            
        </form>
        <?php
       
        
        ?>
        <br><br>
          
  
    <script type="text/javascript" src="grafik/pustaka_FSC/js/fusioncharts.js"></script>
   <script type="text/javascript" src="grafik/pustaka_FSC/js/themes/fusioncharts.theme.fint.js"></script>
   <script type="text/javascript">
     FusionCharts.ready( function(){
	   var G1 = new FusionCharts({
	    "type": "column2d",
		"renderAt": "lokasi",
		"width":"600",
		"height":"250",
		"dataFormat":"jsonurl",
		"dataSource":"grafik/ormawa_column.php"
	   }
	   );
	   G1.render();
	}
	 )
	 
   </script> 
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>



