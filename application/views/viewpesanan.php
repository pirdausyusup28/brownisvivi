<?php foreach ($detail as $d): ?><?php endforeach ?>
		<div class="section section-breadcrumbs"  style="background-color:white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h4 style="color:green"><span style="color: green">Daftar Pesanan</span></h4>
					</div>
				</div>
			</div>
		</div>
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-sm-12 product-details">
	    			<div class="col-sm-12">
	    				<table class="table table-striped">
							<thead>
								<tr>
									<th>PRODUK</th>
									<th>HARGA</th>
									<th>TANGGAL ORDER</th>
									<th>TANGGAL KIRIM</th>
									<th>METODE PEMBAYARAN</th>
									<th>STATUS</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($pesanan as $p ) {
									?>
									<tr>
										<td><?= $p->namaproduk?></td>
										<td><?= $p->harga?></td>
										<td><?= $p->tanggalpesan?></td>
										<td><?= $p->tanggalpesan?></td>
										<td><?= $p->metodepembayaran?></td>
										<td>
											<?php if ($p->statuspesanan == "Sedang Di Proses") { ?>
												<span class="badge badge-warning" style="background-color:yellow;color:red">Barang Sedang disiapkan oleh penjual </span>
											<?php }else if($p->statuspesanan == "Barang Dikirim"){ ?>
												<span class="badge badge-warning" style="background-color:green;color:white">Barang Sudah dikirim</span>
												<a href="<?= base_url('Home/cicilan/');?><?= $p->idpesanan?>" class="btn btn-sm"  style="background-color:red;color:white">Bayar</a>
												 <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Bayar Cicilan</button> -->
											<?php }else if($p->statuspesanan == "Belum di Proses"){ ?>
												<a href="<?= base_url('Home/cicilan/');?><?= $p->id?>" class="btn btn-sm btn-warning" style="background-color:red;color:white" disabled>Silakan lakukan pembayaran untuk memproses pesanan</a>
													<a href="<?= base_url('Home/informasicicilan/');?><?= $p->idpesanan?>" class="btn btn-sm"  style="background-color:red;color:white">Bayar</a>
											<?php }else{?>
												<?php if ($p->metodepembayaran !== 'online') {?>
													<a href="<?= base_url('Home/cicilan/');?><?= $p->id?>" class="btn btn-sm btn-primary" style="background-color:green;color:white">Pesanan Selesai</a>
												<?php }?>
												<span class="badge badge-warning" style="background-color:green;color:white">Pesanan Selesai</span>
											<?php }?>
										</td>
									</tr>
									<?php }?>

							</tbody>
						</table>
	    			</div>
	    		</div>
			</div>
		</div>

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
