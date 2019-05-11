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
              <div class="" style="margin-top: 0px;margin-bottom: 300px;">
                <a href="../../index.php" class="btn btn-primary">Back</a>
              </div>
              <form method="post" enctype="multipart/form-data" action="..\halaman\upload\logo\plogo.php">

                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                <!-- <form action="..\halaman\upload\logo\plogo.php" class="dropzone" id="mydropzone"> -->

                <div class="form-group" style="margin-right: 400px;margin-left: 500px;">
                  <img class="" src="../halaman/upload/logo/uploadlogo/<?= $data['logo'] ?>" alt="image" height="100px" width="100px" style="margin-bottom: -300px;">
                    <div class="fallback">
                      <input name="fupload" type="file" multiple="" style="margin-bottom: -300px;margin-top: 200px;"/>
                    </div>
                  </div>
                </div>

                <div class="text-center pt-1 pb-1" style="margin-left: -900px;margin-bottom: 0px;margin-top: 250px;margin-right: 300px;padding-right: 0px;padding-left: 0px;border-right-style: solid;border-right-width: 0px;">
                  <input type="text" size="89" name="lnk" value="<?= $data['link'] ?>" class="form-control">
                </div>

                  <div class="text-center pt-1 pb-1" style="margin-top: 350px;margin-left: -800px;">
                    <input type="submit" class="btn btn-primary" value="OK" style="margin-right: -340px;">
                  </div>
                <!-- </form> -->

              </form>

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
