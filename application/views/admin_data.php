<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

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
  <?php
  foreach ($css_files as $file) : ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
  <?php endforeach; ?>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="position: sticky !important; top: 0 !important; background-color: #8359a3 !important;">
    <div class="container">
      <a class="navbar-brand" href="#">SETARA</a>
    </div>
  </nav>

  <section class="ftco-section services-section bg-light">
    <div class="row" style="margin: 2rem;">
      <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
          <div class="card-header">
            Daftar Menu
          </div>
          <ul class="list-group list-group-flush">
            <a href="<?php echo base_url(); ?>Datatabel/datapertanyaan" class="list-group-item" style="color: gray; cursor: pointer;"> Data Pertanyaan
            </a>
            <a href="<?php echo base_url(); ?>Datatabel/dataresponden" class="list-group-item" style="color: gray; cursor: pointer;"> Data Responden
            </a>
            <a href="<?php echo base_url(); ?>Hasil/ipak" class="list-group-item" style="color: gray;cursor: pointer;">Lihat Hasil IPAK</a>
            <a href="<?php echo base_url(); ?>Hasil/ikm" class="list-group-item" style="color: gray;cursor: pointer;">Lihat Hasil IKM</a>
            <a href="<?php echo base_url(); ?>Admin/logout" class="list-group-item" style="color: gray;cursor: pointer;"> Logout
            </a>
          </ul>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="page-header">
          <h1 id="navbar">Data</h1>
        </div>
        <?php echo $output; ?>
      </div>
    </div>
  </section>
  <script src="<?php echo base_url(); ?>/assetsh/js/Chart.min.js"></script>
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