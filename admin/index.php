<?php
include '../core/core.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Kopassus Albion Online</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="..\dist\assets\modules\bootstrap\css\bootstrap.min.css">
  <link rel="stylesheet" href="..\dist\assets\modules\fontawesome\css\all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="..\dist\assets\css\style.css">
  <link rel="stylesheet" href="..\dist\assets\css\components.css">
  <!-- Start GA -->
  </head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="..\dist\assets\img\avatar\avatar-1.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="../admin/login/process-login.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" value="Login">

                  </div>
                </form>


              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="..\admin\register\register.php">Create One</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; 2019 - <?php echo date("Y"); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="..\dist\assets\modules\jquery.min.js"></script>
  <script src="..\dist\assets\modules\popper.js"></script>
  <script src="..\dist\assets\modules\tooltip.js"></script>
  <script src="..\dist\assets\modules\bootstrap\js\bootstrap.min.js"></script>
  <script src="..\dist\assets\modules\nicescroll\jquery.nicescroll.min.js"></script>
  <script src="..\dist\assets\modules\moment.min.js"></script>
  <script src="..\dist\assets\js\stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="..\dist\assets\js\scripts.js"></script>
  <script src="..\dist\assets\js\custom.js"></script>
</body>
</html>
