<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Input Data Prestasi Mahasiswa</h4><br>
            <form class="forms-sample" action="<?php echo site_url() . '/prestasi/tambah_aksi'; ?>" method="post">
              <div class="form-group">
                <label for="exampleInputUsername1" required>Nama</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama" name="nama" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" required>NIM</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NIM" name="nim" required>
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Jabatan</label>
                <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Jabatan" name="jabatan">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Prestasi</label>
                <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Prestasi" name="prestasi" required>
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
