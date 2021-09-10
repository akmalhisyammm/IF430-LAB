<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/datatables/css/dataTables.bootstrap.min.css'); ?>">
  <title><?= $title; ?></title>
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Universitas Programmer</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="<?php if ($this->uri->segment(2) == "dosen") echo "active"; ?>">
            <a href="<?= base_url('index.php/home/dosen'); ?>">Dosen</a>
          </li>
          <li class="<?php if ($this->uri->segment(2) == "mahasiswa") echo "active"; ?>">
            <a href="<?= base_url('index.php/home/mahasiswa'); ?>">Mahasiswa</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Halo, <?= $this->session->userdata('nama'); ?> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url('index.php/home/logout'); ?>">Sign Out</a></li>
            </ul>
          </li>
          <li>
            <a href="<?= base_url('index.php/home/logout'); ?>">Sign Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>