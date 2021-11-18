<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Input Data Struktur Organisasi</h4><br>
            <form class="forms-sample" action="<?php echo site_url() . '/struktur/tambah_aksi'; ?>" method="post">
              <div class="form-group">
                <label for="exampleInputUsername1">NIM</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="NIM" name="nim">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="status" class="form-control" required>
                  <option value="">--pilih--</option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Jabatan</label>
                <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Jabatan" name="jabatan">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Prodi/Angkatan</label>
                <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Prodi" name="prodi">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Status</label>
                <select name="status" id="status" class="form-control" required>
                  <option value="">--pilih--</option>
                  <option value="Aktif">Aktif</option>
                  <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
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
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Default form</h4>
    <p class="card-description">
      Basic form layout
    </p>
    <form class="forms-sample">
      <div class="form-group">
        <label for="exampleInputUsername1">Username</label>
        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputConfirmPassword1">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
      </div>
      <div class="form-check form-check-flat form-check-primary">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <button class="btn btn-light">Cancel</button>
    </form>
  </div>
</div>
