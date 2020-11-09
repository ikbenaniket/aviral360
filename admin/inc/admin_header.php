<?php
ob_start();
session_start();
include "pages/examples/dbc.php";
if(isset($_SESSION['username']))
{
$username=$_SESSION['username'];
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>अविरल-365 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins\fontawesome-free\css\all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins\tempusdominus-bootstrap-4\css\tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins\icheck-bootstrap\icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins\jqvmap\jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist\css\adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins\overlayScrollbars\css\OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins\daterangepicker\daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins\summernote\summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link"> <i class="fas fa-home"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="contact.php" class="nav-link"><i class="fas fa-envelope"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
  
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist\img\logoaviral.png" alt="अविरल-365" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">अविरल-365</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist\img\logoaviral.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block"><?php echo $username; ?></a>
        </div>
      </div>
    <?php
        include "admin_nav.php";
?>
     
    </div>
    <!-- /.sidebar -->
  </aside>


  <?php
}
else
{
  header("Location:pages/examples/login.php");
}

?>