<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Brownies by vivi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="<?= base_url();?>assets/assets/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="<?= base_url();?>assets/assets/lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url();?>assets/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?= base_url();?>assets/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url();?>assets/assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >
        <a
          href=""
          class="navbar-brand font-weight-bold text-secondary"
          style="font-size: 30px"
        >
          <span class="text-primary">Brownies By Vivi</span>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="<?=base_url('home');?>" class="nav-item nav-link active">Home</a>
            <a href="<?=base_url('menu');?>" class="nav-item nav-link">Menu</a>
            <a href="<?=base_url('tentang');?>" class="nav-item nav-link">Tentang</a>
            <a href="<?=base_url('kontakperson');?>" class="nav-item nav-link">Kontak Person</a>
            <a href="<?=base_url('cekpesanan');?>" class="nav-item nav-link">Cek Pesanan</a>
            <div class="nav-item dropdown"></div>
          </div>
          <!-- <a href="" class="btn btn-primary px-4">Login</a> -->
        </div>
      </nav>
    </div>
    <!-- Navbar End -->