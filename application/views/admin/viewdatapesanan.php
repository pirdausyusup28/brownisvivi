<!-- [ Main Content ] start -->
<section class="" style="background-color:white;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Pesanan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Table Pesanan</a></li>
                            <li class="breadcrumb-item"><a href="#!">Pesanan</a></li>
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
                        <h5>List Data Pesanan</h5>
                        <div class="alert alert-primary" role="alert"><?= $this->session->flashdata('msg')?></div>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID Pesanan</th>
                                        <!-- <th>ID Produk</th> -->
                                        <!-- <th>Nama Produk</th> -->
                                        <th>Nama Pemesan</th>
                                        <th>No Hp</th>
                                        <!-- <th>Alamat</th> -->
                                        <th>Pesan CS</th>
                                        <th>Tanggal Pesanan</th>
                                        <th>Status Pesanan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($pesanan as $p): ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->idpesanan ?></td>
                                        <!-- <td><?= $p->idproduk ?></td> -->
                                        <td><?= $p->namacustomer ?></td>
                                        <td><?= $p->nohp ?></td>
                                        <td><?= $p->pesancs ?></td>
                                        <td><?= $p->tanggalpesan ?></td>
                                        <td><?= $p->statuspesanan ?></td>
                                        <td>
                                            <a href="<?= base_url('Admin/detailpesanan/'); ?><?= $p->idpesanan ?>"class="btn btn-danger btn-sm">Detail</a>
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
