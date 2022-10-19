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

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">SETARA</a>
    </div>
  </nav>

  <div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
      <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-start">
        <div class="text mt-5 container">
          <div class="row">
            <div class="col-lg-8">
              <h1 class="mb-3"><span>Survei Indeks</span> <span>Kepuasan</span> <span>Masyarakat</span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt autem omnis quae quod nisi consequuntur </p>
              <p><a href="#basic" class="btn btn-secondary px-4 py-3">Mulai Pengisian</a></p>
            </div>
            <div class="col-lg-4">
              <img style="width: 21rem; height: 25rem;" class="" src="<?php echo base_url(); ?>/assetsh/gambar/logo-setara.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <form id="basic">
    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2>Form Pengisian</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4><span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Data Responden</span></h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label><span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Nama</span></label>
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="input-group">
                        <input class="form-control" type="text" placeholder="Masukkan Nama" id="inputRecord1" name="nama" required="required">
                        <div class="input-group-append">
                          <button type="button" class="btn btn-success" aria-label="Help" id="btnRecord1" onclick="speechToText(1)" name="nama" id="nama">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
                              <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z" />
                              <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4" style="padding: 10px 10px 10px 18px">
                      <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)" id="textRecord1" onclick="speechToText(1)"> Klik untuk rekam </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label><span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Umur</span></label>
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="input-group">
                        <input class="form-control" type="text" placeholder="Masukkan Umur" id="inputRecord2" name="umur" required="required">
                        <div class="input-group-append">
                          <button type="button" class="btn btn-success" aria-label="Help" id="btnRecord2" onclick="speechToText(2)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
                              <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z" />
                              <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4" style="padding: 10px 10px 10px 18px">
                      <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)" id="textRecord2" onclick="speechToText(2)"> Klik untuk rekam </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label><span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Jenis Kelamin</span></label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="lakiLakiId" value="Laki - Laki" checked required="required">
                    <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="lakiLakiId">
                      <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Laki - Laki</span>
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuanId" value="Perempuan" required="required">
                    <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="perempuanId">
                      <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Perempuan</span>
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label><span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Pendidikan Terakhir</span></label>
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikan" id="sdId" value="SD" checked required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="sdId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">SD</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikan" id="smpId" value="SMP" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="smpId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">SMP</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikan" id="smaId" value="SMA" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="smaId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">SMA</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikan" id="diplomaId" value="Diploma (D1,D2,D3,D4)" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="diplomaId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Diploma (D1,D2,D3,D4)</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikan" id="s1Id" value="Sarjana (S1)" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="s1Id">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Sarjana (S1)</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikan" id="s2Id" value="S2 Keatas" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="s2Id">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">S2 Keatas</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label><span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Pekerjaan</span></label>
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pekerjaan" id="pnsId" value="PNS" checked required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="pnsId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">PNS</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pekerjaan" id="tniId" value="TNI/Polri" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="tniId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">TNI/Polri</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pekerjaan" id="pegawaiSwastaId" value="Pegawai Swasta" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="pegawaiSwastaId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Pegawai Swasta</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pekerjaan" id="wiraswastaId" value="Wiraswasta" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="wiraswastaId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Wiraswasta</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pekerjaan" id="advokatId" value="Advokat/Pengacara" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="advokatId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Advokat/Pengacara</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pekerjaan" id="mahasiswaId" value="Mahasiswa/Pelajar" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="mahasiswaId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Mahasiswa/Pelajar</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pekerjaan" id="lainLainId" value="Lain - Lain" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="lainLainId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Lain - Lain</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label><span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Jenis Layanan Yang Diterima</span></label>
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisLayanan" id="administrasiId" value="Administrasi Persidangan" checked required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="administrasiId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Administrasi Persidangan</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisLayanan" id="informasiId" value="Permohanan Informmasi" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="informasiId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Permohanan Informmasi</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisLayanan" id="pengaduanId" value="Permohonan Pengaduan" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="pengaduanId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Permohonan Pengaduan</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisLayanan" id="posbakumId" value="Layanan Posbakum" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="posbakumId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Layanan Posbakum</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisLayanan" id="prodeoId" value="Layanan Prodeo" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="prodeoId">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Layanan Prodeo</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>

        </div>
      </div>
    </section>

    <section class="ftco-section-two bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4><span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Form Survei</span></h4>
              </div>
              <div class="card-body">
                <?php foreach ($fetch_data->result() as $row) {
                  $isi1 = str_replace("*", '', $row->isi1);
                  $isi2 = str_replace("*", '', $row->isi2);
                  $isi3 = str_replace("*", '', $row->isi3);
                  $isi4 = str_replace("*", '', $row->isi4);


                  $tempIsi1 = substr($row->isi1, strpos($row->isi1, "*"));;
                  $starIsi1 = str_replace("*", '<span style="vertical-align: top; color: orange;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                  </span>', $tempIsi1);

                  $tempIsi2 = substr($row->isi2, strpos($row->isi2, "*"));;
                  $starIsi2 = str_replace("*", '<span style="vertical-align: top; color: orange;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                  </span>', $tempIsi2);

                  $tempIsi3 = substr($row->isi3, strpos($row->isi3, "*"));;
                  $starIsi3 = str_replace("*", '<span style="vertical-align: top; color: orange;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                  </span>', $tempIsi3);

                  $tempIsi4 = substr($row->isi4, strpos($row->isi4, "*"));;
                  $starIsi4 = str_replace("*", '<span style="vertical-align: top; color: orange;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                  </span>', $tempIsi4);

                ?>
                  <fieldset>
                    <div class="form-group">
                      <label><span style="cursor: pointer" onmouseenter="playTextToSpeech(this)"><?php echo $row->pertanyaan; ?></span> ?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="<?php echo $row->id . "$" . $row->isi1; ?>" name="p<?php echo $row->id ?>" id="p<?php echo $row->id . "p1" ?>" checked required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="p<?php echo $row->id . "p1" ?>">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)"><?php echo $isi1; ?></span>
                          <?php echo $starIsi1 ?>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="<?php echo $row->id . "$" . $row->isi2; ?>" name="p<?php echo $row->id ?>" id="p<?php echo $row->id . "p2" ?>" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="p<?php echo $row->id . "p2" ?>">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)"><?php echo $isi2; ?></span>
                          <?php echo $starIsi2 ?>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="<?php echo $row->id . "$" . $row->isi3; ?>" name="p<?php echo $row->id ?>" id="p<?php echo $row->id . "p3" ?>" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="p<?php echo $row->id . "p3" ?>">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)"> <?php echo $isi3; ?></span>
                          <?php echo $starIsi3 ?>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="<?php echo $row->id . "$" . $row->isi4; ?>" name="p<?php echo $row->id ?>" id="p<?php echo $row->id . "p4" ?>" required="required">
                        <label class="form-check-label" style="font-weight: 100; font-size: 14px" for="p<?php echo $row->id . "p4" ?>">
                          <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)"> <?php echo $isi4; ?></span>
                          <?php echo $starIsi4 ?>
                        </label>
                      </div>
                    </div>
                  </fieldset>
                <?php } ?>
                <div class="form-group">
                  <label><span style="cursor: pointer" onmouseenter="playTextToSpeech(this)">Saran</span></label>
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="input-group">
                        <input class="form-control" type="text" placeholder="Masukkan Saran" id="inputRecord3" name="saran" required="required">
                        <div class="input-group-append">
                          <button type="button" class="btn btn-success" aria-label="Help" id="btnRecord3" onclick="speechToText(3)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
                              <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z" />
                              <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4" style="padding: 10px 10px 10px 18px">
                      <span style="cursor: pointer" onmouseenter="playTextToSpeech(this)" id="textRecord3" onclick="speechToText(3)"> Klik untuk rekam </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="button-submit" class="btn btn-success" onclick="save()">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">SETARA</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt autem omnis quae quod nisi consequuntur </p>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Sosial Media</h2>
            <ul class="list-unstyled">
              <li><a href="https://twitter.com/PTUN_Makassar"><span class="mr-3 fa fa-twitter"></span><span class="text">PTUN_Makassar</span></a></li>
              <li><a href="https://www.youtube.com/c/PTUNMakassar"><span class="mr-3 fa fa-youtube"></span><span class="text">PTUN Makassar</span></a></li>
              <li><a href="https://www.facebook.com/PTUN.Makassar"><span class="mr-3 fa fa-facebook"></span><span class="text">Pengadilan Tata Usaha Negara Makassar</span></a></li>
              <li><a href="http://ptun-makassar.go.id/"><span class="mr-3 fa fa-globe"></span><span class="text">ptun-makassar.go.id</span></a></li>
              <li><a href="mailto: makassar@ptun.org"><span class="mr-3 fa fa-envelope"></span><span class="text">makassar@ptun.org</span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Hubung Kami</h2>
            <div class="block-23 mb-3">
              <ul>
                <li>
                  <span class="mr-3 fa fa-map-marker"></span>
                  <span class="text">
                    Jalan Raya Pendidikan No.1
                    <br>
                    Kelurahan Tidung, Kecamatan Rappocini, Kota Makassar, Provinsi Sulawesi Selatan
                    <br>
                    Kode Pos 90222
                  </span>
                </li>
                <li><a href="tel:+081144402233"><span class="mr-3 fa fa-phone"></span><span class="text">0411 868784 / 081144402233</span></a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
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
    let speech = null;
    let baseUrl = "<?php echo base_url(); ?>";
    let tipe = "<?php echo $tipe; ?>";
    let voices = speechSynthesis.getVoices();

    function playTextToSpeech(x) {
      if (speech && speech !== x.innerHTML.toString() && speechSynthesis.speaking) {
        speechSynthesis.cancel();
      }

      speech = x.innerHTML.toString();
      speechText = speech;
      if (!speechSynthesis.speaking) {
        let speechVoice = new SpeechSynthesisUtterance();
        speechVoice.voice = voices[182];
        speechVoice.text = speechText;
        speechVoice.lang = "id-ID";
        speechSynthesis.speak(speechVoice);
      }
    }

    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    if (SpeechRecognition) {
      const recognition = new SpeechRecognition();
      recognition.interimResults = true;
      recognition.maxAlternatives = 2;
      recognition.lang = "id-ID";

      function speechToText(number) {
        if ($(`#btnRecord${number}`).hasClass('btn-success')) {
          recognition.start();
        } else {
          recognition.stop();
        }

        recognition.addEventListener("start", (e) => {
          setTimeout(() => {
            $(`#btnRecord${number}`).removeClass("btn-success");
            $(`#btnRecord${number}`).addClass("btn-danger");
            $(`#textRecord${number}`).text("Perintah Suara: 'stop', 'hapus' ");
            $(`#inputRecord${number}`).focus();
          }, 100);
        });

        recognition.addEventListener("end", (e) => {
          setTimeout(() => {
            $(`#btnRecord${number}`).removeClass("btn-danger");
            $(`#btnRecord${number}`).addClass("btn-success");
            $(`#textRecord${number}`).text(" Klik untuk rekam");
            $(`#inputRecord${number}`).focus()
          }, 100);
        });

        recognition.addEventListener("result", (e) => {
          const transcript = Array.from(e.results)
            .map((result) => result[0])
            .map((result) => result.transcript)[0].slice(0, -1);

          if (transcript.toLowerCase().trim() === "stop") {
            recognition.stop();
          } else if (transcript.toLowerCase().trim() === "hapus") {
            $(`#inputRecord${number}`).val('');
          } else {
            $(`#inputRecord${number}`).val(transcript);
          }
        });

      };

      $(document).ready(function() {
        if (!speechSynthesis.speaking) {
          let speechVoice = new SpeechSynthesisUtterance();
          speechVoice.voice = voices[182];
          speechVoice.text = "selamat datang di survei elektronik teknologi audio ramah disabilitas (setara) ptun makassar";
          speechVoice.lang = "id-ID";
          speechSynthesis.speak(speechVoice);
        }
      });
    } else {
      alert("Your Browser does not support Speech Recognition, Please Use Google Chrome");
    }

    function save() {
      $("#basic").addClass('was-validated');
      $("#basic").submit(function(e) {
        swal({
          title: "Apa anda yakin ingin menyimpan data ?",
          text: "Pastikan data yang diinput benar!",
          icon: "warning",
          buttons: ["Tidak", "Iya"],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            $.ajax({
              type: "POST",
              url: baseUrl + "Input/save_kuisioner/" + tipe,
              data: $(e.target).serialize(),
              dataType: "json",
              success: function(data) {
                if (data.status === true) {
                  swal({
                    title: "Berhasil",
                    text: "Data Berhasil Tersimpan",
                    icon: "success",
                    button: "OK",
                  }).then(function(isConfirm) {
                    window.location = baseUrl + "Input/Berhasil/" + tipe;
                  });
                } else {
                  $(".load").modal("hide");
                  swal({
                    title: "Error",
                    text: "Data Gagal Disimpan",
                    icon: "error",
                    button: "OK",
                  });
                }
              },
            });
          } else {
            swal("Cancelled", "", "error");
          }
        });
        return false;
      });
    }
  </script>

</body>

</html>