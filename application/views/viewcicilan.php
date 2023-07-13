<?php foreach ($cicilan as $d): ?><?php endforeach ?>
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h4 style="color:white">Product Details <i><span style="color: white"><?= $d->namaproduk ?></span></i></h4>
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
								<td><input type="text" name="id" id="id" class="form-control input-sm input-micro" placeholder="" value="<?= $d->id ?>" readonly></td>
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
									<input type="text" name="metodepembayaran" id="metodepembayaran" class="form-control" placeholder="" value="<?= $d->metodepembayaran ?>" readonly style="width: 350px">
									</div>
								</td>
							</tr>
							<?php if($d->metodepembayaran !== 'online'){?>
							<tr>
								<td><b>Cicilan:</b></td>
								<td>
									<div class="dropdown">
									<input type="text" name="cicilan" id="cicilan" class="form-control" placeholder="" value="<?= $d->cicilan ?> bulan" readonly style="width: 350px">
									</div>
								</td>
							</tr>
							<?php }?>

							<!-- <tr>
								<td><b>Detail Cicilan:</b></td>
								<td>
									Rp 79.000 / bulan x 3bulan
								</td>
							</tr> -->
							<!-- <tr>
								<td>&nbsp;</td>
								<td>
									<button type="submit" class="btn  btn-success">Order Sekarang</button>
								</td>
							</tr> -->
						</table><br><br>
						<?php if($d->metodepembayaran !== 'online'){?>
						<?php
							$totalcicilan = $d->cicilan;
						?>
						<table class="shop-item-selections">
							<tr>
								<th class="text-center">Cicilan ke</th>
								<th class="text-center">Total</th>
								<th class="text-center">No Ref Pembayaran</th>
								<th></th>
							</tr>
							<?php $i=1; foreach ($tenor as $t): ?>
								<tr>
									<td class="text-center"><?= $t->cicilanke?></td>
									<td class="text-center">Rp. <?= number_format($t->harga/$totalcicilan) ?></td>
									<td class="text-center"><?= $t->norefpembayaran?></td>
									<td>
										<?php if ($t->norefpembayaran == "") { ?>
											<a href="<?= base_url('Home/informasicicilan');?>" class="btn btn-sm" style="background-color:red;color:white" >Bayar Cicilan</a>
										<?php }else{?>
											<a href="<?= base_url('Home/bayar');?>" class="btn btn-sm disabled" style="background-color:green;color:white">Sudah dibayar</a>
										<?php }?>
									</td>
								</tr>
							<?php endforeach ?>
							
						</table>
						<?php }?>
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
        		let harga = $('#harga').val()
        		$('#totalpesanan').keyup(function() {
        			let pesanan = $('#totalpesanan').val();
        			let totalnya = pesanan * harga;
        			$('#totalharga').val(totalnya);
        		});
        	});
        </script>

    </body>
</html>
