<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vivi Brownis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <link rel="icon" href="<?= base_url(); ?>assets/assetsadmin/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assetsadmin/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="" style="background-color:white;">
<style>
	.pcoded-navbar.menu-light .pcoded-inner-navbar > li.active > a, .pcoded-navbar.menu-light .pcoded-inner-navbar > li.pcoded-trigger > a {
  background: #934415;
  color: #fff;
}
</style>
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue" style="background-color:#db5c1e">
	<div class="m-header">
		<a href="#!" class="b-brand"><h4 style="color: white">Vivi Brownis</h4></a>
		<a href="#!" class="mob-toggler"><i class="feather icon-more-vertical"></i></a>
	</div>
	<div class="collapse navbar-collapse">
	</div>
</header>
<div class="row container" style="justify-content: flex-start;">
	<a href="<?= base_url('Admin/datauser'); ?>" class="nav-link " style="color:black;padding-left: 30px;"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Data User Pengguna</span></a>
	<!-- <a href="<?= base_url('Admin/dataregistrasi'); ?>" class="nav-link " style="color:black;padding-left: 30px;"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Data Customer Registrasi</span></a> -->
	<a href="<?= base_url('Admin/dataproduk'); ?>" class="nav-link " style="color:black;padding-left: 30px;"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Data Nama Brownis</span></a>
	<a href="<?= base_url('Admin/datastock'); ?>" class="nav-link " style="color:black;padding-left: 30px;"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Data Stock</span></a>
	<a href="<?= base_url('Admin/postingproduk'); ?>" class="nav-link " style="color:black;padding-left: 30px;"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Posting Produk</span></a>
	<a href="<?= base_url('Admin/datapesanan'); ?>" class="nav-link " style="color:black;padding-left: 30px;"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Data Pesanan</span></a>
	<a href="<?= base_url('Admin/datalaporan'); ?>" class="nav-link " style="color:black;padding-left: 30px;"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Laporan Penjualan</span></a>
	<a href="<?= base_url('Admin/logout'); ?>" class="nav-link " style="color:black;padding-left: 30px;"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Logout</span></a>
</div>

<!-- Add the following CSS code -->
<style>
	@media (max-width: 768px) {
		.navbar-nav {
			flex-direction: column;
		}

		.nav-item {
			margin-bottom: 10px;
		}

		.nav-link {
			padding-left: 0;
		}
	}
</style>

