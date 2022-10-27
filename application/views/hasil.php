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
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="position: sticky !important; top: 0 !important; background-color: #8359a3 !important;">
    <div class="container">
      <a class="navbar-brand" href="#" style="font-size: 3.5rem !important; line-height: 25px;">SETARA <br> <small style="font-size: 1rem !important; color: lightgray;">Survei Elektronik Teknologi Audio Ramah Disabiltas</small></a>            
    </div>
  </nav>

  <section class="ftco-section services-section bg-light">
    <div class="row" style="margin: 2rem;">
      <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
          <div class="card-header">
            List Pertanyaan
          </div>
          <ul class="list-group list-group-flush">
            <?php foreach ($list_pertanyaan as $row) { ?>
              <a class="list-group-item" href="<?php echo base_url("Hasil/$tipe/$row->id"); ?>" class="list-group-item" style="color: gray">
                Pertanyaan <?php echo $row->id ?>
              </a>
            <?php } ?>
            <a class="list-group-item" href="<?php echo base_url(); ?>Admin" class="list-group-item" style="color: gray">
              Kembali
            </a>
          </ul>
        </div>
      </div>
      <div class="col-lg-9">
        <p> Dari <span class="badge badge-success"><?php echo $total; ?></span> Responden Untuk pertanyaan Ini Menjawab <?php echo str_replace("*", '', $pertanyaan->isi1) ?> = <span class="badge badge-info"><?php echo $total_isi1; ?></span>, <?php echo str_replace("*", '', $pertanyaan->isi2) ?> = <span class="badge badge-info"><?php echo $total_isi2; ?></span>, <?php echo str_replace("*", '', $pertanyaan->isi3) ?> = <span class="badge badge-info"><?php echo $total_isi3; ?></span>, Dan <?php echo str_replace("*", '', $pertanyaan->isi4) ?> = <span class="badge badge-info"><?php echo $total_isi4; ?></span> Orang</p>
        <div class="page-header">
          <h1 id="navbar">Grafik</h1>
        </div>
        <canvas id="myChart" width="400" height="100"></canvas>
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
  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["<?php echo str_replace("*", '', $pertanyaan->isi1) ?>", "<?php echo str_replace("*", '', $pertanyaan->isi2) ?>", "<?php echo str_replace("*", '', $pertanyaan->isi3) ?>", "<?php echo str_replace("*", '', $pertanyaan->isi4) ?>"],
        datasets: [{
          label: '',
          data: [<?php echo $total_isi1; ?>, <?php echo $total_isi2; ?>, <?php echo $total_isi3; ?>, <?php echo $total_isi4; ?>],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 4
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>
</body>

</html>