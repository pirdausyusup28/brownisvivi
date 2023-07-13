<!-- Page Title -->
		<div class="section section-breadcrumbs" style="background-color:white">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1  style="color:green">Kontak Kami</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
	        	<div class="row">
	        		<div class="col-sm-7">
	        			<!-- Map -->
	        			<div id="contact-us-map">

	        			</div>
	        			<!-- End Map -->

	        		</div>
	        		<div class="col-sm-5">
	        			<!-- Contact Form -->
	        			<p class="contact-us-details">
	        				<?php foreach ($kontak as $value): ?>
		        				<b>Alamat Kantor:</b> <?= $value->alamatkantor ?><br/>
		        				<b>Kontak Person:</b> <?= $value->kontakperson ?><br/>
	        				<?php endforeach ?>
	        			</p>
		        		<!-- End Contact Info -->
	        		</div>
	        	</div>
	    	</div>
	    </div>

	    <!-- Footer -->
	    <!-- <div class="footer" style="background-color: #ddd">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Our Latest Work</h3>
		    			<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-portfolio-item.html"><img src="<?= base_url(''); ?>assets/img/portfolio6.jpg" alt="Project Name"></a>
							</div>
						</div>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Navigate</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="page-blog-posts.html">Blog</a></li>
		    				<li><a href="page-portfolio-3-columns-2.html">Portfolio</a></li>
		    				<li><a href="page-products-3-columns.html">eShop</a></li>
		    				<li><a href="page-services-3-columns.html">Services</a></li>
		    				<li><a href="page-pricing.html">Pricing</a></li>
		    				<li><a href="page-faq.html">FAQ</a></li>
		    			</ul>
		    		</div>

		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contacts</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
	        				<b>Phone:</b> +44 123 654321<br/>
	        				<b>Fax:</b> +44 123 654321<br/>
	        				<b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-2 col-xs-6">
		    			<h3>Stay Connected</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="#" class="facebook"></a></li>
		    				<li><a href="#" class="twitter"></a></li>
		    				<li><a href="#" class="googleplus"></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2021 RIZKY. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div> -->

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
