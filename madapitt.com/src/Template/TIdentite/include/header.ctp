<?php
$cakeDescription = 'Madapitt';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
  <?= $cakeDescription ?>:
  <?= $this->fetch('title') ?>
  </title>
  <!-- MDB icon -->
  <!-- <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">-->
  <?= $this->Html->meta('icon') ?>
  <!-- Font Awesome -->
  <?= $this->Html->css('https://use.fontawesome.com/releases/v5.11.2/css/all.css') ?>
  <!-- Bootstrap core CSS -->
  <?= $this->Html->css('css/bootstrap.min.css') ?>
   <!-- Material Design Bootstrap -->
  <?= $this->Html->css('css/mdb.min.css') ?>
  <!-- Your custom styles (optional) -->
  <?= $this->Html->css('css/style.css') ?>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  
  
  
</head>
<body>

  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar color black">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <strong>Madapitt</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="chien.php">Les Chiens</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profil</a>
            </li>
          </ul>
          <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user"></i> Profile </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                  <a class="dropdown-item" href="#">Mon Compte</a>
                  <a class="dropdown-item" href="#">Déconnexion</a>
                </div>
              </li>
            </ul>
          </div>
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    <!-- Full Page Intro -->
    
    </header>
    <div class="view" style="background-image: url('img/318137.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">