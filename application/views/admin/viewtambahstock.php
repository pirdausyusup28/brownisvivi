<?php foreach($stock as $s):?><?php endforeach?>
<section class="" style="background-color:white;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Form Stock</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Stock</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Stock</a></li>
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

                        <h5>Form Tambah Stock</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form method="post" action="<?= base_url() ?>Admin/savedataStock">
                                <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?= $s->idstock?>">
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
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Stock</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="stock" name="stock" placeholder="" value="<?= $s->stock?>">
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
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.getStockByClassName('needs-validation');
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