<?php foreach($produk as $a):?>
<?php endforeach?>
<div class="container-fluid bg-primary mb-5" style="background-color: #3e2e30 !important;">
	<div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
		<h3 class="display-3 font-weight-bold text-white">Order Brownies</h3>
	</div>
</div>
<div class="container-fluid py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5">
				<img class="img-fluid rounded mb-5 mb-lg-0" src="<?= base_url('images/produk/');?><?= $a->gambar?>" alt=""/>
			</div>
			<div class="col-lg-7">
				<p class="section-title pr-5"><span class="pr-2">Brownies By Vivi</span></p>
				<h1 class="mb-4"><?= $a->namaproduk?></h1>
				<p>Silakan masukan data untuk proses Order Brownies</p>
				<form action="<?= base_url('Customer/tambahorder');?>" method="post">
					<div class="control-group">
						<input type="hidden" class="form-control" id="id" name="id" value="<?= $a->idposting?>"/>
						<input type="text" class="form-control" id="namacustomer" name="namacustomer" placeholder="Nama Pemesan" required="required" data-validation-required-message="Nama Pemesan"/>
						<p class="help-block text-danger"></p>
					</div>
					<div class="control-group">
						<input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Handphone" required="required" data-validation-required-message="No Handphone"/>
						<p class="help-block text-danger"></p>
					</div>
					<div class="control-group">
						<input type="text" class="form-control" id="pesancs" name="pesancs" placeholder="pesan text" />
						<p class="help-block text-danger"></p>
					</div>
					<div class="control-group">
						<textarea class="form-control" rows="6" id="alamat" name="alamat" placeholder="Alamat Lengkap" required="required" data-validation-required-message="Alamat Lengkap"></textarea>
						<p class="help-block text-danger"></p>
					</div>
					<div class="control-group">
						<p class="help-block text-success">harga brownis</p>
						<input type="text" class="form-control" value="<?= $a->harga?>" id="harga" name="harga" />
						<p class="help-block text-success"></p>
					</div>
					<div class="control-group">
						<p class="help-block text-success">Metode Pembayaran</p>
							<select name="pembayaran" id="pembayaran" class="form-control">
								<option value="COD">COD</option>
								<option value="TRANSFER">TRANSFER</option>
							</select>
						<p class="help-block text-danger"></p>
					</div>
					<div>
						<button class="btn btn-primary py-2 px-4" type="submit" id="order">Order</button>
					</div>
				</form>
			</div>
		</div><br><br>
		<div class="card">
			<!-- <div class="card-header">
				Brownies Colkat Belanda
			</div> -->
			<div class="card-body">
				<h5 class="card-title">Brownies Colkat Belanda</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	$(document).ready(function () {
		// $("#order").click(function () { 
		// 	Swal.fire({
		// 	title: 'Terimakasih atas orderan browniesnya, Admin kami akan segera menghubungi anda untuk konfirmasi pesanan..',
		// 	showClass: {
		// 		popup: 'animate__animated animate__fadeInDown'
		// 	},
		// 	hideClass: {
		// 		popup: 'animate__animated animate__fadeOutUp'
		// 	}
		// 	})
		// });
	});
</script>