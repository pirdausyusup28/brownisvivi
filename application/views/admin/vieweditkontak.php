<?php foreach ($kon as $v): ?>
<?php endforeach ?>
<section class="" style="background-color:white;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Form Kontak</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Kontak</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Kontak</a></li>
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
                        <h5>Form Edit Kontak</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form method="post" action="<?= base_url() ?>Admin/updatedatakontak">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat Toko</label>
                                        <div class="col-sm-9">
                                            <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?= $v->id; ?>">
                                            <!-- <input type="text" class="form-control" id="alamatkantor" name="alamatkantor" placeholder="" value="<?= $v->alamatkantor; ?>"> -->
                                            <textarea class="form-control" id="alamatkantor" name="alamatkantor" placeholder="" cols="30" rows="10"><?= $v->alamatkantor; ?></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Kontak Person</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="kontakperson" name="kontakperson" placeholder="" value="<?= $v->kontakperson; ?>">
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="submit" name="update" class="btn btn-primary" value="Update"/>
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