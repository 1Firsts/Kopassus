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
              <div class="" style="padding-bottom: 150px;margin-right: 200px;">
                <a href="../../index.php" class="btn btn-primary">Back</a>
              </div>
              <form method="post" action="..\halaman\update1.php">

                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

                <div class="form-group" style="margin-right: -43px;margin-left: 270px;padding-left: 51px;margin-bottom: 36px;">
                  <div class="selectgroup selectgroup w-100">
                    <label class="selectgroup-item">
                      <input type="radio" name="icon-input" value="id.svg" <?=$data['flag']=="id.svg" ? "checked" : ""?> class="selectgroup-input">
                      <img class="selectgroup-button" src="..\..\dist\assets\modules\flag-icon-css\flags\4x3\id.svg" alt="image">
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="icon-input" value="my.svg" <?=$data['flag']=="my.svg" ? "checked" : ""?> class="selectgroup-input">
                      <img class="selectgroup-button" src="..\..\dist\assets\modules\flag-icon-css\flags\4x3\my.svg" alt="image">
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="icon-input" value="us.svg" <?=$data['flag']=="us.svg" ? "checked" : ""?> class="selectgroup-input">
                      <img class="selectgroup-button" src="..\..\dist\assets\modules\flag-icon-css\flags\4x3\us.svg" alt="image">
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="icon-input" value="ps.svg" <?=$data['flag']=="ps.svg" ? "checked" : ""?> class="selectgroup-input">
                      <img class="selectgroup-button" src="..\..\dist\assets\modules\flag-icon-css\flags\4x3\ps.svg" alt="image">
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="icon-input" value="de.svg" <?=$data['flag']=="de.svg" ? "checked" : ""?> class="selectgroup-input">
                      <img class="selectgroup-button" src="..\..\dist\assets\modules\flag-icon-css\flags\4x3\de.svg" alt="image">
                    </label>
                  </div>
                </div>

                <div class="form-group" style="margin-right: 0px;padding-right: 0px;margin-left: 304px;">
                  <input type="text" size="89" name="tj" value="<?php echo $data['text_j'] ?>" class="form-control">
                </div>

                <div class="text-center" style="margin-left: 822px;">
                  <input type="submit" name="update" class="btn btn-primary" value="OK">
                  <a href="..\halaman\structure\leader.php?id=<?= $data['id']?>" class="btn btn-primary">Next</a>
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
