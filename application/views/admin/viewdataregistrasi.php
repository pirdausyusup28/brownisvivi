<!-- [ Main Content ] start -->
<section class="" style="background-color:white;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Registrasi Online</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Table Registrasi Online</a></li>
                            <li class="breadcrumb-item"><a href="#!">Registrasi Online</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>List Data User Registrasi Online</h5>
                        <!-- <button type="button" class="btn btn-primary btn-sm"> Tambah Produk</button> -->
                        <!-- <a href="<?= base_url('Admin/formtambahproduk'); ?>" class="btn btn-primary btn-sm">Tambah Produk</a> -->
                        <!-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> -->
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama User</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($regis as $value): ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value->username ?></td>
                                            <td><?= $value->alamat ?></td>
                                            <td><?= $value->notelp ?></td>
                                            <td><?= $value->email ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>