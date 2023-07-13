        <style>
			.alert {
			padding: 20px;
			background-color: #f44336;
			color: white;
			font-size: 18px;
			border-radius: 5px;
			}
		</style>
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
						<div class="alert">
							<?= $this->session->flashdata('msg')?>
                        </div>
							<form class="login" action="<?= base_url('Login/cek_login'); ?>" method="post">
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Username</b></label>
									<input class="form-control" id="username" name="username" type="text">
								</div>
								<div class="form-group">
		        				 	<label for="login-password"><i class="icon-lock"></i> <b>Password</b></label>
									<input class="form-control" id="password" name="password" type="password" placeholder="">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block mb-4">Login</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-7 social-login">
						<p>Or login with your Facebook or Twitter</p>
						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">LOGO</a>
						</div>
						<div class="clearfix"></div>
						<div class="not-member">
							<p>Not a member? <a href="<?= base_url('Register'); ?>">Register here</a></p>
						</div>
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