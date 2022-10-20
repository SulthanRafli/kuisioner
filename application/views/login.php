<!DOCTYPE html>
<html lang="en">

<head>
  <title>SETARA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="<?php echo base_url(); ?>/assetsh/gambar/logo-setara.png" rel="shortcut icon" />
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assetsh/bootstrap4/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assetsh/bootstrap4/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assetsh/bootstrap4/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assetsh/bootstrap4/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assetsh/bootstrap4/css/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assetsh/bootstrap4/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-image: url('<?php echo base_url(); ?>assetsh/gambar/Bg3a.jpg')">

  <div class="row d-flex justify-content-center align-items-center" style="height: 100vh !important;">
    <div class="card mx-auto">
      <h5 class="card-header text-center">Silahkan Masukan Username dan Password Anda</h5>
      <div class="card-body">
        <form action="<?php echo base_url(); ?>Admin/login_validation" method="POST">
          <?php
          if ($this->session->flashdata("error")) {
            echo '<label class="text-danger">' . $this->session->flashdata("error") . '</label>';
          } else {
            echo '';
          } ?>
          <div class="form-group">
            <label>Username <span>*</span></label>
            <input type="text" class="form-control" name="nama_user" required="required">
          </div>
          <div class="form-group">
            <label>Password <span>*</span></label>
            <input type="password" class="form-control" name="password" required="required">
          </div>
          <button type="submit" class="btn btn-primary btn-block btn-lg">Masuk</button>
        </form>
      </div>
    </div>
  </div>



  <script src="<?php echo base_url(); ?>/assetsh/bootstrap4/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap4/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap4/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap4/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap4/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap4/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap4/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap4/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap4/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap4/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap4/js/scrollax.min.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap4/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>

</html>