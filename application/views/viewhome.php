
<style>
	.card-img-top {
  height: 200px; /* Adjust the height as needed */
  object-fit: cover; /* Maintain aspect ratio and crop if necessary */
}
</style>
<div class="container-fluid bg-danger px-0 px-md-5 mb-5" style="background-color: #3e2e30 !important;">
	<div class="row align-items-center px-3">
		<div class="col-lg-6 text-center text-lg-left">
			<h4 class="text-white mb-4 mt-5 mt-lg-0">Brownies</h4>
			<h1 class="display-3 font-weight-bold text-white">Dengan Kelezatan Coklat yang berkwalitas</h1>
		</div>
		<div class="col-lg-6 text-lg-right">
			<img class="img-fluid" src="<?= base_url();?>assets/assets/img/kue1.jpg" alt="" />
		</div>
	</div>
</div>

<div class="container-fluid pt-5">
	<div class="container">
		<div class="text-center pb-2">
			<p class="section-title px-5">
			<span class="px-2">Menu Brownies</span>
			</p>
			<h1 class="mb-4">Silakan Di Pesan</h1>
		</div>
		<div class="row pb-3">
			<?php foreach($produk as $p):?>
			<div class="col-lg-3 mb-3">
				<div class="card border-0 shadow-sm mb-2">
					<img class="card-img-top mb-2"  src="<?= base_url();?>images/produk/<?= $p->gambar?>" alt=""/>
					<a href="<?= base_url('Customer/order/');?><?= $p->idposting ?>" class="btn btn-primary px-4 mx-auto my-2">Order</a>

					<div class="card-body bg-white text-center p-4">
					<h4 class=""><?= $p->namaproduk?></h4>
					<div class="d-flex justify-content-center mb-3">
						<small class="mr-3">Rp. <?= number_format($p->harga)?> </small>
					</div>
					<p>
						<?= $p->deskripsiproduk;?>
					</p>
					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>