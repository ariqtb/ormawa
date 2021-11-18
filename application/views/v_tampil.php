<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Daftar Keanggotaan BEM</h4><br>
                <a href="<?php echo site_url(); ?>/crud/tambah" class="btn btn-primary">Tambah Data</a>
                <hr>
                <!-- <?php echo $this->session->flashdata('pesan') ?> -->
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="tbl_login" width="100%" cellspacing="0" style="text-align: center">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>prodi</th>
                        <th>jumlah</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($bem as $u) {
                      ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $u->prodi ?></td>
                          <td><?php echo $u->jumlah ?></td>
                          <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo site_url('/crud/edit/' . $u->id) ?>">
                              Edit
                            </a> |
                            <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo site_url('/crud/hapus/' . $u->id) ?>">
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
    </div>
  </div>
</div>
</div>