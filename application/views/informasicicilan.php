 <!-- Page Title -->
 <div class="section section-breadcrumbs" style="background-color:white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1  style="color:green">Cara Pembayaran Cicilan</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<p>Untuk Pembayaran bisa dengan cara transfer ke aplikasi DANA dengan qrcode dibawah ini </p>
                        <img src="<?= base_url('images/qrcode.jpg');?>" style="width:30%;height:30%" alt="">
					</div>
					<div class="col-sm-12">
						<!-- <div class="video-wrapper"> -->
						<br><br>
						<?php foreach ($cicilan as $pp): ?>
							<?php endforeach ?>
							<h3>Silakan melakukan pembayaran pertama sebesar <b><i><span style="color:red">Rp <?=number_format($pp->ciclanpertama)?></span></i></b> dengan cara menscan qrcode di atas, kemudian silakan upload bukti transfer nya pada form dibawah ini.</h3>
						<!-- </div> -->
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
