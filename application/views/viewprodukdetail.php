<?php foreach ($detail as $d): ?><?php endforeach ?>
		<div class="section section-breadcrumbs" style="background-color:white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h4 style="color:green">Product Details <i><span style="color: green"><?= $d->namaproduk ?></span></i></h4>
					</div>
				</div>
			</div>
		</div>
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-sm-6">
	    				<div class="product-image-large">
	    					<img  src="<?= base_url('images/'); ?><?= $d->gambar ?>" style="width: 350px;height: 300px">
	    				</div>
	    			</div>
	    			<div class="col-sm-6 product-details">
	    				<?php echo form_open_multipart('Produkdetail/orderproduk'); ?>
						<table class="shop-item-selections">
							<tr>
								<td>ID Produk :</td>
								<td>
									<input type="text" name="id" id="id" class="form-control input-sm input-micro" placeholder="" value="<?= $d->id ?>" readonly>
									<input type="hidden" name="gambar" id="gambar" class="form-control input-sm" placeholder="" value="<?= $d->gambar ?>" readonly>
									<input type="hidden" name="nama" id="nama" class="form-control input-sm" placeholder="" value="<?= $this->session->userdata('username'); ?>" readonly>
								</td>
							</tr>
							<tr>
								<td>Jenis Produk :</td>
								<td><input type="text" name="jenisproduk" id="jenisproduk" class="form-control" placeholder="" value="<?= $d->jenisproduk ?>" readonly style="width: 350px"></td>
							</tr>
							<tr>
								<td>Nama Produk :</td>
								<td><input type="text" name="namaproduk" id="namaproduk" class="form-control" placeholder="" value="<?= $d->namaproduk ?>" readonly style="width: 350px"></td>
							</tr>
							<tr>
								<td>Harga :</td>
								<td><input type="text" name="harga" id="harga" class="form-control" placeholder="" value="<?= $d->harga ?>" readonly style="width: 350px"></td>
							</tr>
							<tr>
								<td><b>Metode Pembayaran:</b></td>
								<td>
									<div class="dropdown">
										<select name="metodepembayaran" id="metodepembayaran" class="form-control" style="width: 350px">
											<option value="online">Online</option>
											<option value="paylater">Paylater</option>
										</select>
									</div>
								</td>
							</tr>
							<tr id="tablecicilan">
								<td><b>Cicilan:</b></td>
								<td>
									<div class="dropdown">
										<select name="cicilan" id="cicilan" class="form-control" style="width: 350px">
											<option value=""></option>
											<option value="3">3 bulan</option>
											<option value="6">6 bulan</option>
											<option value="12">12 bulan</option>
										</select>
									</div>
								</td>
							</tr>

							<tr id="tablecicilandetail">
								<td><b>Cicilan per bulan Rp:</b></td>
								<td>
									<input type="text" name="detailcicilan" id="detailcicilan" class="form-control" placeholder="" value="<?= $d->detailcicilan ?>" readonly style="width: 150px">
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<button type="submit" class="btn  btn-success">Order Sekarang</button>
								</td>
							</tr>
						</table>
                        <?php echo form_close() ?>
	    			</div>
	    			<div class="col-sm-12">
	    				<div class="tabbable">
							<ul class="nav nav-tabs product-details-nav">
								<li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
							</ul>
							<div class="tab-content product-detail-info">
								<div class="tab-pane active" id="tab1">
									<h4>Product Description</h4>
									<p>
										<?= $d->deskripsi ?>
									</p>
							</div>
						</div>
	    			</div>
	    		</div>
			</div>
		</div>
	    <!-- <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2022 Tehsijeunishop.id. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div> -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= base_url(); ?>assets/js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.fitvids.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.sequence-min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.bxslider.js"></script>
        <script src="<?= base_url(); ?>assets/js/main-menu.js"></script>
        <script src="<?= base_url(); ?>assets/js/template.js"></script>
        <script>
        	$(document).ready(function() {
				$('#tablecicilan').hide();
				$('#tablecicilandetail').hide();
        		let harga = $('#harga').val()
        		let cicilan = $('#cicilan').val()
        		$('#cicilan').change(function() {
					let harga = $('#harga').val()
					let cicilan = $('#cicilan').val()
        			let detailnya = Math.round(harga / cicilan);
        			$('#detailcicilan').val(detailnya);
        		});

				$('#metodepembayaran').change(function() {
					let metodepembayaran = $("#metodepembayaran").val();
					console.log(metodepembayaran)
        			if(metodepembayaran == 'online'){
						$('#tablecicilan').hide();
						$('#tablecicilandetail').hide();
					}else{
						$('#tablecicilan').show();
						$('#tablecicilandetail').show();
					}
        		});
        	});
        </script>

    </body>
</html>
