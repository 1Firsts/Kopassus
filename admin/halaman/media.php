<?php
session_start();
include '../../core/core.php';

if(!isset($_SESSION['username'])) {
  header("Location: ..\index.php?access_denied");
}

$id=$_GET['id'];

$sql = "SELECT * FROM info WHERE id=$id";

$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Kopassus Albion Online</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="..\..\dist\assets\modules\bootstrap\css\bootstrap.min.css">
  <link rel="stylesheet" href="..\..\dist\assets\modules\fontawesome\css\all.min.css">
  <link rel="stylesheet" href="..\..\dist\assets\modules\ionicons\css\ionicons.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="..\..\dist\assets\modules\prism\prism.css">
  <link rel="stylesheet" href="..\..\dist\assets\modules\dropzonejs\dropzone.css">
  <link rel="stylesheet" href="..\..\dist\assets\modules\bootstrap-colorpicker\dist\css\bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="..\..\dist\assets\modules\bootstrap-daterangepicker\daterangepicker.css">
  <link rel="stylesheet" href="..\..\dist\assets\modules\select2\dist\css\select2.min.css">
  <link rel="stylesheet" href="..\..\dist\assets\modules\jquery-selectric\selectric.css">
  <link rel="stylesheet" href="..\..\dist\assets\modules\bootstrap-timepicker\css\bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="..\..\dist\assets\modules\bootstrap-tagsinput\dist\bootstrap-tagsinput.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="..\..\dist\assets\css\style.css">
  <link rel="stylesheet" href="..\..\dist\assets\css\components.css">
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
            <div class="row">
              <div class="">
                <a href="../../index.php" class="btn btn-primary">Back</a>
              </div>
              <form method="post" action="..\halaman\update.php">

                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

                <h1 class="" style="margin-left: 480px;margin-right: 0px;padding-bottom: 30px;">Perubahan Data</h1>

                <div class="form-group" style="margin-right: 0px;margin-left: 200px;">
                  <input type="text" value="<?php echo $data['head'] ?>" name="hd" class="form-control">
                </div>

                <div class="form-group" style="margin-right: 0px;margin-left: 200px;">
                  <label>Informasi</label>
                  <input type="text" value="<?php echo $data['informasi'] ?>" name="in" class="form-control">
                </div>

                <div class="form-group" style="margin-right: 0px;margin-left: 206px;">
                  <label>Game</label>
                  <input type="text" name="gm" value="<?php echo $data['game'] ?>" class="form-control">
                  <label>Guild</label>
                  <input type="text" name="gl" value="<?php echo $data['guild'] ?>" class="form-control">
                  <label>Date</label>
                  <input type="text" name="dt" value="<?php echo $data['date'] ?>"class="form-control datepicker">
                  <label>Member</label>
                  <input type="text" name="jm" value="<?php echo $data['jm_member'] ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                </div>

                <script>
                function hanyaAngka(evt) {
                  var charCode = (evt.which) ? evt.which : event.keyCode
                  if (charCode > 31 && (charCode < 48 || charCode > 57))

                  return false;
                  return true;
                }
                </script>

                <div class="text-center" style="margin-left: 595px;">
                  <input type="submit" name="update" class="btn btn-primary" value="OK">
                  <a href="..\halaman\media1.php?id=<?= $data['id']?>" class="btn btn-primary">Next</a>

                </div>
              </form>
            </div>

            <div class="section-body">

            </div>
          </section>
        </div>
        <footer class="main-footer">
          <div class="footer-left">
            Copyright &copy; 2019 - <?php echo date("Y"); ?>
          </div>
          <div class="footer-right" style="padding-right: 250px;">
            Design by <a href="#"  class="btn">1First</a>
          </div>
        </footer>
      </div>
    </div>

    <!-- General JS Scripts -->
    <script src="..\..\dist\assets\modules\jquery.min.js"></script>
    <script src="..\..\dist\assets\modules\popper.js"></script>
    <script src="..\..\dist\assets\modules\tooltip.js"></script>
    <script src="..\..\dist\assets\modules\bootstrap\js\bootstrap.min.js"></script>
    <script src="..\..\dist\assets\modules\nicescroll\jquery.nicescroll.min.js"></script>
    <script src="..\..\dist\assets\modules\moment.min.js"></script>
    <script src="..\..\dist\assets\js\stisla.js"></script>


    <!-- JS Libraies -->
    <script src="..\..\dist\assets\modules\prism\prism.js"></script>
    <script src="..\..\dist\assets\modules\dropzonejs\min\dropzone.min.js"></script>
    <script src="..\..\dist\assets\modules\cleave-js\dist\cleave.min.js"></script>
    <script src="..\..\dist\assets\modules\cleave-js\dist\addons\cleave-phone.us.js"></script>
    <script src="..\..\dist\assets\modules\jquery-pwstrength\jquery.pwstrength.min.js"></script>
    <script src="..\..\dist\assets\modules\bootstrap-daterangepicker\daterangepicker.js"></script>
    <script src="..\..\dist\assets\modules\bootstrap-colorpicker\dist\js\bootstrap-colorpicker.min.js"></script>
    <script src="..\..\dist\assets\modules\bootstrap-timepicker\js\bootstrap-timepicker.min.js"></script>
    <script src="..\..\dist\assets\modules\bootstrap-tagsinput\dist\bootstrap-tagsinput.min.js"></script>
    <script src="..\..\dist\assets\modules\select2\dist\js\select2.full.min.js"></script>
    <script src="..\..\dist\assets\modules\jquery-selectric\jquery.selectric.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="..\..\dist\assets\js\page\forms-advanced-forms.js"></script>
    <script src="..\..\dist\assets\js\page\components-multiple-upload.js"></script>
    <script src="..\..\dist\assets\js\page\bootstrap-modal.js"></script>

    <!-- Template JS File -->
    <script src="..\..\dist\assets\js\scripts.js"></script>
    <script src="..\..\dist\assets\js\custom.js"></script>
  </body>
  </html>
