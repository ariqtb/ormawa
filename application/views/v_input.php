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
        <span class="menu-title">Prestasi</span>
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

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Tambah Data</h4><br>
            <form class="forms-sample" action="<?php echo site_url() . '/crud/tambah_aksi'; ?>" method="post">
              <div class="form-group">
                <label for="exampleInputUsername1">Prodi</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Prodi" name="prodi">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Jumlah</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah" name="jumlah">
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
