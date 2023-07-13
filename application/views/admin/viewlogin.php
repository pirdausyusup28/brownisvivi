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
	<link rel="stylesheet" href="<?= base_url(); ?>assets/assetsadmin/css/style.css">
</head>
<div class="auth-wrapper" style="background-color:#895c2b;">
	<div class="">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-6">
					<div class="card-body">
						<form class="login" action="<?= base_url('Admin/cek_login'); ?>" method="post">
							<div class="form-group mb-3">
								<label class="floating-label" for="Username">Username</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="">
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="">
							</div>
							<button type="submit" class="btn btn-danger btn-block mb-4">Login</button>
        				</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card-body" >
						<h1 style="font-family: Lucida Console">Vivi Brownis</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?= base_url(); ?>assets/assetsadmin/js/vendor-all.min.js"></script>
<script src="<?= base_url(); ?>assets/assetsadmin/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/assetsadmin/js/ripple.js"></script>
<script src="<?= base_url(); ?>assets/assetsadmin/js/pcoded.min.js"></script>
</body>
</html>
