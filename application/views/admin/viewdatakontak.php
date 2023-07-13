<!-- [ Main Content ] start -->
<section class="" style="background-color:white;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Kontak</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Table Kontak</a></li>
                            <li class="breadcrumb-item"><a href="#!">Kontak</a></li>
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
                        <h5>List Data Kontak</h5>
                        <!-- <button type="button" class="btn btn-primary btn-sm"> Tambah Kontak</button> -->
                        <!-- <a href="<?= base_url('Admin/formtambahKontak'); ?>" class="btn btn-primary btn-sm">Tambah Kontak</a> -->
                        <!-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> -->
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Alamat Toko</th>
                                        <!-- <th>Kontak Person</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($kon as $v): ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $v->alamatkantor ?></td>
                                            <!-- <td><?= $v->kontakperson ?></td> -->
                                            <td>
                                                <a href="<?= base_url('Admin/editkontak/'); ?><?= $v->id; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <!-- <a href="<?= base_url('Admin/hapusdatakontak/'); ?><?= $v->id; ?>" class="btn btn-danger btn-sm">Hapus</a> -->
                                            </td>
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