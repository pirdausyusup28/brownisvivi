<!-- [ Main Content ] start -->
<section class="" style="background-color:white;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Tentang</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Table Tentang</a></li>
                            <li class="breadcrumb-item"><a href="#!">Tentang</a></li>
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
                        <h5>List Data Tentang</h5>
                        <!-- <button type="button" class="btn btn-primary btn-sm"> Tambah Tentang</button> -->
                        <!-- <a href="<?= base_url('Admin/formtambahTentang'); ?>" class="btn btn-primary btn-sm">Tambah Tentang</a> -->
                        <!-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> -->
                    </div>
                    <div class="card-body table-border-style">
                    <div class="alert alert-primary" role="alert">
                        <?= $this->session->flashdata('msg')?>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php $no=1; foreach ($ten as $v): ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $v->kategori ?></td>
                                            <td><?= $v->deskripsi ?></td>
                                            <td>
                                                <a href="<?= base_url('Admin/edittentang/'); ?><?= $v->id; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <!-- <a href="<?= base_url('Admin/hapusdatatentang/'); ?><?= $v->id; ?>" class="btn btn-danger btn-sm">Hapus</a> -->
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