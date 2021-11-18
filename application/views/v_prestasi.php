<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data Prestasi Mahasiswa Ormawa Micro IT</h4><br>
            <div class="col-12">
              <a href="<?php echo site_url(); ?>/prestasi/tambah" class="btn btn-primary">Tambah Data </a>
              <a href="<?php echo site_url(); ?>/prestasi/excel" class="btn btn-sm btn-success ti-download"> Excel </a>
              <a href="<?php echo site_url(); ?>/prestasi/pdf" class="btn btn-sm btn-danger ti-download"> PDF </a>
            </div>
            <hr>
            <!-- <?php echo $this->session->flashdata('pesan') ?> -->
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm" id="tbl_login" width="100%" cellspacing="0" style="text-align: center;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jabatan</th>
                    <th>Prestasi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($data_prestasi as $u) {
                  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->nama ?></td>
                      <td><?php echo $u->nim ?></td>
                      <td><?php echo $u->jabatan ?></td>
                      <td><?php echo $u->prestasi ?></td>

                      <td>
                        <a class="btn btn-sm btn-primary" href="<?php echo site_url('/prestasi/edit/' . $u->id) ?>">
                          Edit
                        </a> |
                        <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo site_url('/prestasi/hapus/' . $u->id) ?>">
                          Hapus
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src=" <?= base_url('assets'); ?>/pustaka_FSC/js/fusioncharts.js"></script>
<script src=" <?= base_url('assets'); ?>/pustaka_FSC/js/FS_themes/fusioncharts.theme.fint.js"></script>
<script type="text/javascript">
  FusionCharts.ready(function() {
    var G1 = new FusionCharts({
      "type": "column2d",
      "renderAt": "lokasi",
      "width": "800",
      "height": "500",
      "dataFormat": "jsonurl",
      "dataSource": "v_prestasi_grafik.php"
    });
    G1.render();
  })
</script>
<div id="lokasi"></div>
<?php

?>
</div>
</div>
</div>
</div>

