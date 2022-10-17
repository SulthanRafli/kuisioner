<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sistem Informasi Kuisioner Survey</title>
  <link href="assetsh/gambar/Bg3.png" rel="shortcut icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assetsh/theme/bootstrap.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assetsh/theme/usebootstrap.css">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="bootstrap/html5shiv.js"></script>
      <script src="bootstrap/respond.min.js"></script>
    <![endif]-->
  <script src="<?php echo base_url(); ?>/assetsh/js/Chart.min.js"></script>
</head>

<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="<?php echo base_url(); ?>/Hasil" class="navbar-brand">Sistem Informasi Kuisioner Survey</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">
      </div>
    </div>
  </div>
  <div class="page-header">
    <h1 id="navbar">Hasil Kuisioner</h1>
  </div>
  <div class="panel panel-info col-lg-3">
    <div class="panel-heading">
      <h3 class="panel-title">Panel info</h3>
    </div>
    <div class="panel-body">
      <div class="list-group">
        <?php foreach ($list_pertanyaan as $row) { ?>
          <a href="<?php echo base_url("Hasil/$tipe/$row->id"); ?>" class="list-group-item">
            Pertanyaan <?php echo $row->no ?>
          </a>
        <?php } ?>
        <a href="<?php echo base_url(); ?>Datatabel" class="list-group-item">
          Kembali
        </a>
      </div>
    </div>
  </div>
  <div class="container col-lg-9">
    <p> Dari <span class="label label-success"><?php echo $total->total; ?></span> Responden Untuk pertanyaan Ini Menjawab <?php echo str_replace("*", '', $pertanyaan->isi1) ?> = <span class="label label-info"><?php echo $total_isi1->total; ?></span>, <?php echo str_replace("*", '', $pertanyaan->isi2) ?> = <span class="label label-info"><?php echo $total_isi2->total; ?></span>, <?php echo str_replace("*", '', $pertanyaan->isi3) ?> = <span class="label label-info"><?php echo $total_isi3->total; ?></span>, Dan <?php echo str_replace("*", '', $pertanyaan->isi4) ?> = <span class="label label-info"><?php echo $total_isi4->total; ?></span> Orang</p>
    <div class="page-header">
      <h1 id="navbar">Grafik</h1>
    </div>

    <canvas id="myChart" width="400" height="100"></canvas>

  </div>
  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["<?php echo str_replace("*", '', $pertanyaan->isi1) ?>", "<?php echo str_replace("*", '', $pertanyaan->isi2) ?>", "<?php echo str_replace("*", '', $pertanyaan->isi3) ?>", "<?php echo str_replace("*", '', $pertanyaan->isi4) ?>"],
        datasets: [{
          label: '',
          data: [<?php echo $total_isi1->total; ?>, <?php echo $total_isi2->total; ?>, <?php echo $total_isi3->total; ?>, <?php echo $total_isi4->total; ?>],
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
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/assetsh/bootstrap/usebootstrap.js"></script>
</body>

</html>