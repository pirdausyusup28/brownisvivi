<?php foreach ($pesanan as $p): ?><?php endforeach ?>
<style>
    .save-icon::before {
        content: "\f0c7"; /* Unicode for the save icon */
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
    }
    .disabled {
    opacity: 0.5;
    pointer-events: none;
    cursor: not-allowed;
}
</style>
<section class="" style="background-color:white;">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"> Detail Pesanan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"> Detail Pesanan</a></li>
                            <li class="breadcrumb-item"><a href="#!"> Detail Pesanan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"></div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Detail Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">ID Pesanan</label>
                                        <div class="col-sm-3">
                                            <span class="badge badge-success" style="color:black"><?= $p->idpesanan ?></span>
                                            <input type="hidden" name="id" id="id" class="form-control" value="<?= $p->idpesanan ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">ID Produk</label>
                                        <div class="col-sm-3">
                                            <span class="badge badge-success" style="color:black"><?= $p->idproduk ?></span>
                                            <input type="hidden" name="idproduk" id="idproduk" class="form-control" value="<?= $p->idproduk ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Nama Pemesan</label>
                                        <div class="col-sm-9">
                                            <span class="badge badge-success" style="color:black"><?= $p->namacustomer ?></span>
                                            <input type="hidden" name="namacustomer" id="namacustomer" class="form-control" value="<?= $p->namacustomer ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Harga</label>
                                        <div class="col-sm-9">
                                            <span class="badge badge-success" style="color:black"><?= $p->harga ?></span>
                                            <input type="hidden" name="harga" id="harga" class="form-control" value="<?= $p->harga ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Pesanan</label>
                                        <div class="col-sm-9">
                                            <span class="badge badge-success" style="color:black"><?= $p->tanggalpesan ?></span>
                                            <input type="hidden" name="tanggalpesan" id="tanggalpesan" class="form-control" value="<?= $p->tanggalpesan ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Metode Pembayaran</label>
                                        <div class="col-sm-9">
                                            <span class="badge badge-success" style="color:black"><?= $p->pembayaran ?></span>
                                            <input type="hidden" name="pembayaran" id="pembayaran" class="form-control" value="<?= $p->pembayaran ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Status Pesanan</label>
                                        <div class="col-sm-9">
                                            <span class="badge badge-success" style="color:black"><?= $p->statuspesanan ?></span>
                                            <input type="hidden" name="statuspesanan" id="statuspesanan" class="form-control" value="<?= $p->statuspesanan ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">No Transaksi Pembayaran</label>
                                        <div class="col-sm-3">
                                            <span class="badge badge-success" style="color:black"><?= $p->notransaksipembayaran ?></span>
                                            <?php if($p->notransaksipembayaran == ''){?>
                                                <input type="text" name="notransaksipembayaran" id="notransaksipembayaran" class="form-control" value="<?= $p->notransaksipembayaran ?>">
                                            <?php }?>
                                            <button class="btn btn-danger btn-sm" onclick="simpanref(<?= $p->idpesanan?>)"  title="Simpan No transaksi Pembayaran"><span class="save-icon"></span></button>
                                        </div>
                                    </div>
                                </form>
								<div class="form-group row">
                                    <div class="col-sm-10">
                                        <?php if ($p->statuspesanan == 'Pesanan Di Buat'): ?>
                                            <a href="<?= base_url('Admin/statuspesanandikirim/'); ?><?= $p->idpesanan ?>" class="btn btn-danger">Pesanan Dikirim</a>
                                        <?php elseif ($p->statuspesanan == 'Pesanan Di Kirim'): ?>
                                            <a href="<?= base_url('Admin/statuspesananselesai/'); ?><?= $p->idpesanan ?>" class="btn btn-success">Pesanan Selesi</a>
                                        <?php elseif ($p->statuspesanan == 'Pesanan Selesai'): ?>
                                            <a class="btn btn-success">Pesanan Close</a>
                                        <?php else: ?>
                                            <a href="<?= base_url('Admin/statuspesanan/'); ?><?= $p->idpesanan ?>" class="btn btn-warning" id="myButton">Buat Pesanan</a>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <center><img  src="<?= base_url('images/produk/'); ?><?= $p->gambar ?>" style="width: 350px;height: 300px"><br>Gambar Produk</center>
                            </div>
                        </div>
						</div>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                        <script>
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    var forms = document.getUserByClassName('needs-validation');
                                    var validation = Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                        }, false);
                                    });
                                }, false);
                            })();
                            
                            function simpanref(id)
                            {
                                console.log(id);
                                var idnoref = $("#id").val();
                                var noref = $("#notransaksipembayaran").val();
                                $.post("<?= base_url('Admin/simpannoref') ?>", {idnoref:idnoref, noref:noref}, function() {
                                    alert("No Transaksi Pembayaran Berhasil disimpan");
                                    location.reload();
                                });
                            }
                            $(document).ready(function () {
                                var notransaksipembayaran = "<?= $p->notransaksipembayaran ?>";
                                if (notransaksipembayaran === '') {
                                    document.getElementById("myButton").classList.add("disabled");
                                    document.getElementById("myButton").addEventListener("click", function(event) {
                                        event.preventDefault();
                                    });
                                }
                            });
                        </script>
            </div>
        </div>
    </div>
</section>
