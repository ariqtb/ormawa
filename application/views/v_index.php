<!DOCTYPE html>
<html>
<head>
    <title>Kirim Email KompiKaleng</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.3.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap-datepicker.min.js'); ?>"></script>

</head>
<style type="text/css">
    body{
        margin: 20px;
    }
</style>
<body>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <b>Kompikaleng Kirim Email Undangan Acara</b>
        </div>
        <div class="panel-body">
            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('C_Index/kirimEmail'); ?>">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nama">Nama User</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama user..."></input>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">Email User</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan email user..."></input>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="acara">Acara</label>
                        <input type="text" name="acara" id="acara" class="form-control" placeholder="Masukkan nama acara..."></input>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="alamat">Alamat Acara</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat acara..."></input>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="tanggal_acara">File</label>
                        <input class="form-control" type="file"name="file" id="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-success" type="submit"> Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    $('.datepicker').datepicker({
    format: 'dd MM yyyy',
    startDate: '-3d'
});
</script>