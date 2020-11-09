<!DOCTYPE html>
<?php
 ob_start();
 session_start();
 include "dbc.php";
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>अविरल 365 Admin Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="..\..\plugins\fontawesome-free\css\all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="..\..\plugins\icheck-bootstrap\icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="..\..\dist\css\adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
  <img src="..\..\dist\img\logoaviral.png" alt="अविरल 365">
    <a href=""></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      <h6 style="color: orange;"><?php 
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']); 
    }
    ?></h6>
      <form action="check_register.php" method="post">
        <div class="input-group mb-3">
          <input name="username" id="username" type="text" class="form-control" placeholder="User name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="email" id="email" type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" id="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <div class="col-4">
            <button name="register" class="btn btn-primary btn-block">Register</button>
          
          </div>
          <p class="mb-0">
        <a href="login.php" class="text-center">Already Have an Account</a>
      </p>
          <!-- /.col -->
        </div>
        
      </form>
      
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="..\..\plugins\jquery\jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="..\..\plugins\bootstrap\js\bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="..\..\dist\js\adminlte.min.js"></script>

</body>
</html>
