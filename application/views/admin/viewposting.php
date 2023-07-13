<!-- [ Main Content ] start -->
<section class="" style="background-color:white;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Postingan Produk</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Table Postingan Produk</a></li>
                            <li class="breadcrumb-item"><a href="#!">Postingan Produk</a></li>
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
                        <h5>List Data Postingan Produk</h5>
                        <!-- <button type="button" class="btn btn-primary btn-sm"> Tambah Produk</button> -->
                        <a href="<?= base_url('Admin/formtambahposting'); ?>" class="btn btn-primary btn-sm">Tambah Posting Produk</a>
                        <!-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> -->
                        

                    </div>
                    <div class="alert alert-primary" role="alert"><?= $this->session->flashdata('msg')?></div>

                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID Postingan</th>
                                        <th>ID Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Tanggal Kadaluarsa</th>
                                        <th>Informasi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($postingan as $p): ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->id ?></td>
                                        <td><?= $p->idproduk ?></td>
                                        <td><?= $p->namaproduk ?></td>
                                        <td><?= $p->harga ?></td>
                                        <td><?= $p->tanggal ?></td>
                                        <td><?= $p->flag ?></td>
                                        <td>
                                            <a href="<?= base_url('Admin/editposting/'); ?><?= $p->idposting ?>"class="btn btn-success btn-sm">Edit</a>
                                            <a href="<?= base_url('Admin/hapusposting/'); ?><?= $p->idposting ?>"class="btn btn-danger btn-sm hapus">Hapus</a>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".hapus").click(function () { 
            alert('Berhasil Dihapus')
            
        });
    });
</script>