        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Update Profil</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
						<?php foreach ($p as $b): ?>
							<?php endforeach ?>
							<form method="post" action="<?= base_url() ?>Register/updatedataprofil">
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Username</b></label>
									<input class="form-control" id="id" name="id" type="hidden" placeholder="" value="<?= $b->id?>">
									<input class="form-control" id="username" name="username" type="text" placeholder="" value="<?= $b->username ?>" readonly>
								</div>
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Alamat</b></label>
									<input class="form-control" id="alamat" name="alamat" type="text" placeholder="" value="<?= $b->alamat ?>">
								</div>
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>No. Telphone / Wa</b></label>
									<input class="form-control" id="notelp" name="notelp" type="text" placeholder="" value="<?= $b->notelp ?>">
								</div>
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Email</b></label>
									<input class="form-control" id="email" name="email" type="text" placeholder="" value="<?= $b->email ?>">
								</div>
								<div class="form-group">
		        				 	<label for="login-password"><i class="icon-lock"></i> <b>Password</b></label>
									<input class="form-control" id="password" name="password" type="password" placeholder="" value="<?= $b->password ?>">
								</div>
								<div class="form-group">
									<input type="submit" name="save" class="btn pull-right" value="Register"/>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-7 social-login">
						<p>Silahkan Masukan Data terbaru anda untuk mengupdate data profil</p>
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