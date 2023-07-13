        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Login</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							<form method="post" action="<?= base_url() ?>Register/savedata">
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Nama</b></label>
									<input class="form-control" id="username" name="username" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Alamat</b></label>
									<input class="form-control" id="alamat" name="alamat" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>No. Telphone / Wa</b></label>
									<input class="form-control" id="notelp" name="notelp" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Email</b></label>
									<input class="form-control" id="email" name="email" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="login-password"><i class="icon-lock"></i> <b>Password</b></label>
									<input class="form-control" id="password" name="password" type="password" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="login-password"><i class="icon-lock"></i> <b>Ulangi Password</b></label>
									<input class="form-control" type="password" placeholder="">
								</div>
								<div class="form-group">
									<input type="submit" name="save" class="btn pull-right" value="Register"/>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-7 social-login">
						<p>Silahkan Masukan Data anda untuk register login</p>
						<!-- <div class="social-login-buttons">
							<a href="#" ></a>
							<a href="#" ></a>
						</div> -->
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>

	    

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= base_url(); ?>assets/js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.fitvids.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.sequence-min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.bxslider.js"></script>
        <script src="<?= base_url(); ?>assets/js/main-menu.js"></script>
        <script src="<?= base_url(); ?>assets/js/template.js"></script>

    </body>
</html>