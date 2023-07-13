<?php foreach ($prod as $v): ?>
<?php endforeach ?>
<section class="" style="background-color:white;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Form Produk</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Produk</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Produk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">

            </div>
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Edit Produk</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                               <?php echo form_open_multipart('Admin/updatedataproduk'); ?>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Nama Produk</label>
                                        <div class="col-sm-9">
                                            <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?= $v->idproduk ?>">
                                            <input type="text" class="form-control" id="namaproduk" name="namaproduk" placeholder="" value="<?= $v->namaproduk ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Deskripsi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="" value="<?= $v->deskripsi ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Gambar</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="gambar" name="gambar" placeholder="" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn  btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                <?php echo form_close() ?>
                            </div>

                        </div>
                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.getUserByClassName('needs-validation');
                                    // Loop over them and prevent submission
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
                        </script>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>

