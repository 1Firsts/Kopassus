<?php
session_start();
include 'core/core.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Kopassus Albion Online</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="dist\assets\modules\bootstrap\css\bootstrap.min.css">
  <link rel="stylesheet" href="dist\assets\modules\fontawesome\css\all.min.css">
  <link rel="stylesheet" href="dist\assets\modules\ionicons\css\ionicons.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="dist\assets\modules\prism\prism.css">
  <link rel="stylesheet" href="dist\assets\modules\dropzonejs\dropzone.css">
  <link rel="stylesheet" href="dist\assets\modules\bootstrap-colorpicker\dist\css\bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="dist\assets\modules\bootstrap-daterangepicker\daterangepicker.css">
  <link rel="stylesheet" href="dist\assets\modules\select2\dist\css\select2.min.css">
  <link rel="stylesheet" href="dist\assets\modules\jquery-selectric\selectric.css">
  <link rel="stylesheet" href="dist\assets\modules\bootstrap-timepicker\css\bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="dist\assets\modules\bootstrap-tagsinput\dist\bootstrap-tagsinput.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="dist\assets\css\style.css">
  <link rel="stylesheet" href="dist\assets\css\components.css">
  <!-- Start GA -->
  </head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg" style="background-color: #7c8efc;"></div>



      <!-- Main Content -->
      <div class="main-content" style="min-height: 598px;padding-left: 99px;padding-right: 99px;">
        <section class="section">
          <div class="section-header">

            <?php
            $sql = "SELECT * FROM info";

            $query = mysqli_query($connect, $sql);
            if(!$query){
              echo mysqli_error($connect);
            }

            while($data = mysqli_fetch_array($query)){
              ?>

            <!-- Welcome Guild -->

            <div class="" style="padding-left: 454px;">
              <h1><?= $data['head'] ?></h1>
            </div>
            <!-- Hi Welcome to Kopassus..! -->
          </div>

          <!-- Informasi GUILD -->
          <div class="row">
            <div class="" style="padding-right: 25px;padding-left: 510px;">
              <div class="avatar-item mb-0" >
                <!-- dist\assets\img\avatar\avatar-1.png -->
                <img alt="image" src="admin/halaman/upload/logo/uploadlogo/<?= $data['logo'] ?>" class="img-fluid" title="image" width="200" style="padding-bottom: 30px;">
              </div>
            </div>

            <div class="text-center pt-1 pb-1" style="padding-left: 99px;">
              <p><?= $data['informasi'] ?></p>
              <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
            </div>
          </div>

          <br>
          <br>

          <!-- Informasi GUILD -->
          <div class="row" style="padding-left: 79px;">
            <div class="" style="padding-left: 250px;">
              <!-- dist\assets\modules\flag-icon-css\flags\4x3\id.svg -->
              <img class="img-fluid mt-1 img-shadow" src="dist\assets\modules\flag-icon-css\flags\4x3\<?= $data['flag'] ?>" alt="image" width="250" style="box-shadow: -8px 11px 5px rgba(0, 0, 0, 0.13);">
            </div>

            <div class="" style="padding-left: 99px;margin-top: 20px;">
              <p><b>Game :</b> <?= $data['game'] ?> </p>
              <p><b>Guild :</b> <?= $data['guild'] ?> </p>
              <p><b>Date :</b> <?= $data['date'] ?> </p>
              <p><b>Member :</b> <?= $data['jm_member'] ?> </p>
            </div>
          </div>

          <br>
          <br>


          <!-- Informasi Members -->
          <div class="text-center pt-1 pb-1">
            <h3 style="margin-bottom: 200px;">Structure Guild</h3>
          </div>

          <br>
          <br>

          <div class="row">
            <div class="">
              <div class="avatar-item mb-0" style="bottom: 210px;right: -17px;">
                <img alt="image" src="admin\halaman\upload\profile\uploadleader\<?= $data['leader'] ?>" class="img-fluid" data-toggle="tooltip" title="<?= $data['nickl'] ?>" width="200" style="padding-left: 0px;margin-left: 487px; box-shadow: -8px 11px 5px rgba(0, 0, 0, 0.13);">
                <span class="badge badge-primary"><i class="<?= $data['rll'] ?>"></i></span>
              </div>
            </div>

            <div class="">
              <div class="avatar-item mb-0" style="padding-bottom: 0px;left: -555px;right: 0px;">

                <img alt="image" src="admin\halaman\upload\profile\uploadguardsman\<?= $data['guardsman'] ?>" class="img-fluid" data-toggle="tooltip" title="<?= $data['nickm'] ?>" width="200" style="box-shadow: -8px 11px 5px rgba(0, 0, 0, 0.13);">
                <span class="badge badge-secondary"><i class="<?= $data['rlm'] ?>"></i></span>
              </div>
            </div>

            <div class="">
              <div class="avatar-item mb-0" style="right: 0px;bottom: 0px;top: -228px;left: 800px;">

                <img alt="image" src="admin\halaman\upload\profile\uploadguildmaster\<?= $data['guild_master'] ?>" class="img-fluid" data-toggle="tooltip" title="<?= $data['nickr'] ?>" width="200" style="box-shadow: -8px 11px 5px rgba(0, 0, 0, 0.13);">
                <span class="badge badge-success"><i class="<?= $data['rlr'] ?>"></i></span>
              </div>
            </div>

            <div class="">
              <div class="avatar-item mb-0" style="left: -243px;right: 0px;bottom: 0px;top: 48px;">

                <img alt="image" src="admin\halaman\upload\profile\uploadmember\<?= $data['member'] ?>" class="img-fluid" data-toggle="tooltip" title="<?= $data['nicke'] ?>" width="200" style="box-shadow: -8px 11px 5px rgba(0, 0, 0, 0.13);">
                <span class="badge badge-danger"><i class="<?= $data['rle'] ?>"></i></span>
              </div>
            </div>

            <div class="">
              <div class="avatar-item mb-0" style="left: -178px;top: 73px;right: 0px;bottom: 0px;">

                <img alt="image" src="admin\halaman\upload\profile\uploadofficer\<?= $data['officer'] ?>" class="img-fluid" data-toggle="tooltip" title="<?= $data['nickcer'] ?>" width="200" style="box-shadow: -8px 11px 5px rgba(0, 0, 0, 0.13);">
                <span class="badge badge-warning"><i class="<?= $data['rlcer'] ?>"></i></span>
              </div>
            </div>

            <div class="">
              <div class="avatar-item mb-0" style="bottom: 203px;right: 0px;left: -215px;padding-bottom: 0px;margin-bottom: 0px;top: -200px;">

                <img alt="image" src="admin\halaman\upload\profile\uploadrecruit\<?= $data['Recruit'] ?>" class="img-fluid" data-toggle="tooltip" title="<?= $data['nickit'] ?>" width="200" style="box-shadow: -8px 11px 5px rgba(0, 0, 0, 0.13);">
                <span class="badge badge-info"><i class="<?= $data['rlit'] ?>"></i></span>
              </div>
            </div>
            <div class="">
              <div class="avatar-item mb-0" style="left: 0px;bottom: 0px;right: 0px;top: 64px;">

                <img alt="image" src="admin\halaman\upload\profile\uploadthhand\<?= $data['th_hand'] ?>" class="img-fluid" data-toggle="tooltip" title="<?= $data['nicknd'] ?>" width="200" style="box-shadow: -8px 11px 5px rgba(0, 0, 0, 0.13);">
                <span class="badge badge-light"><i class="<?= $data['rlnd'] ?>"></i></span>
              </div>
            </div>
            <div class="">
              <div class="avatar-item mb-0" style="bottom: 200px;left: 618px;right: 0px;top: -192px;">

                <img alt="image" src="admin\halaman\upload\profile\uploadwarmaster\<?= $data['warmaster'] ?>" class="img-fluid" data-toggle="tooltip" title="<?= $data['nickster'] ?>" width="200" style="box-shadow: -8px 11px 5px rgba(0, 0, 0, 0.13);">
                <span class="badge badge-dark"><i class="<?= $data['rlster'] ?>"></i></span>
              </div>
            </div>

          </div>


          <div class="text-center pt-1 pb-1">
            <p><?= $data['text_j'] ?></p>
          </div>

          <?php } ?>

          <div class="text-center pt-1 pb-1">
            <a href="https://<?= $data['link'] ?>" class="btn btn-primary btn-lg btn-round">
              Join Now
            </a>
          </div>

          <div class="section-body">
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 - <?php echo date("Y"); ?>
        </div>

        <?php
        $sql = "SELECT * FROM info";

        $query = mysqli_query($connect, $sql);
        if(!$query){
          echo mysqli_error($connect);
        }

        while($data = mysqli_fetch_array($query)){
          ?>

        <div class="footer-right" style="padding-right: 250px;">
          Design by <a href="admin\halaman\media.php?id=<?= $data['id']?>"  class="btn">1First</a>
        <?php } ?>

        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="dist\assets\modules\jquery.min.js"></script>
  <script src="dist\assets\modules\popper.js"></script>
  <script src="dist\assets\modules\tooltip.js"></script>
  <script src="dist\assets\modules\bootstrap\js\bootstrap.min.js"></script>
  <script src="dist\assets\modules\nicescroll\jquery.nicescroll.min.js"></script>
  <script src="dist\assets\modules\moment.min.js"></script>
  <script src="dist\assets\js\stisla.js"></script>

  <!-- JS Libraies -->
  <script src="dist\assets\modules\prism\prism.js"></script>
  <script src="dist\assets\modules\dropzonejs\min\dropzone.min.js"></script>
  <script src="dist\assets\modules\cleave-js\dist\cleave.min.js"></script>
  <script src="dist\assets\modules\cleave-js\dist\addons\cleave-phone.us.js"></script>
  <script src="dist\assets\modules\jquery-pwstrength\jquery.pwstrength.min.js"></script>
  <script src="dist\assets\modules\bootstrap-daterangepicker\daterangepicker.js"></script>
  <script src="dist\assets\modules\bootstrap-colorpicker\dist\js\bootstrap-colorpicker.min.js"></script>
  <script src="dist\assets\modules\bootstrap-timepicker\js\bootstrap-timepicker.min.js"></script>
  <script src="dist\assets\modules\bootstrap-tagsinput\dist\bootstrap-tagsinput.min.js"></script>
  <script src="dist\assets\modules\select2\dist\js\select2.full.min.js"></script>
  <script src="dist\assets\modules\jquery-selectric\jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="dist\assets\js\page\forms-advanced-forms.js"></script>
  <script src="dist\assets\js\page\components-multiple-upload.js"></script>
  <script src="dist\assets\js\page\bootstrap-modal.js"></script>

  <!-- Template JS File -->
  <script src="dist\assets\js\scripts.js"></script>
  <script src="dist\assets\js\custom.js"></script>
</body>
</html>
