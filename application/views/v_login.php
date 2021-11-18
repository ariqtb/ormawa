<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets');?>/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url('assets');?>/images/logoipb.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo mr-1 " >
                <img src="<?=base_url('assets');?>/images/logosvipb.png" class="img-fluid" alt="logo">
              </div>
              <h4>Silahkan Login</h4>
              <form class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="<?php echo base_url(); ?>beranda/komdisma">LOGIN</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                Lupa password? <a href="#" class="text-primary">klik disini</a>
                </div>
                <div class="mb-2">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?=base_url('assets');?>/../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?=base_url('assets');?>/../../js/off-canvas.js"></script>
  <script src="<?=base_url('assets');?>/../../js/hoverable-collapse.js"></script>
  <script src="<?=base_url('assets');?>/../../js/template.js"></script>
  <script src="<?=base_url('assets');?>/../../js/settings.js"></script>
  <script src="<?=base_url('assets');?>/../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
