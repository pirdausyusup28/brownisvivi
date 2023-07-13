 <!-- Page Title -->
		<div class="section section-breadcrumbs" style="background-color:white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1  style="color:green">About Us</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<?php foreach ($visimisi as $vm): ?>
							<h3>VISI dan MISI</h3>
							<p>
								<?= $vm->deskripsi ?>
							</p>
						<?php endforeach ?>
					</div>
					<div class="col-sm-6">
						<div class="video-wrapper">
							<iframe src="http://player.vimeo.com/video/47000322?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
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
