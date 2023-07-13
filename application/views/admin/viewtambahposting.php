<?php foreach($posting as $s):?><?php endforeach?>
<section class="" style="background-color:white;">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Form Posting</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Posting</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Posting</a></li>
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
                        <h5>Form Tambah Posting</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form method="post" action="<?= base_url() ?>Admin/savedataposting">
                                    <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?= $s->idposting?>">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Produk</label>
                                        <div class="col-sm-9">
                                            <select name="idproduk" id="idproduk" class="form-control">
                                                <?php foreach($produk as $p):?>
                                                    <option value="<?= $p->idproduk?>"><?= $p->namaproduk?></option>
                                                <?php endforeach?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">deskripsi produk</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="deskripsiproduk" name="deskripsiproduk" placeholder="" value="<?= $s->deskripsiproduk?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">harga</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="harga" name="harga" placeholder="" value="<?= $s->harga?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">tanggal kadaluarsa</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="" value="<?= $s->tanggal?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">flag</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="flag" name="flag" placeholder="" value="<?= $s->flag?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="submit" name="save" class="btn btn-primary" value="Simpan"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                        <script>
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    var forms = document.getPostingByClassName('needs-validation');
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
        </div>
    </div>
</section>