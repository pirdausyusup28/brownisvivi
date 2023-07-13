<!-- [ Main Content ] start -->
<section class="" style="background-color:white;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Stock    </h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Table Stock </a></li>
                            <li class="breadcrumb-item"><a href="#!">Stock   </a></li>
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
                        <h5>List Data Stock  </h5>
                        <a href="<?= base_url('Admin/formtambahStock '); ?>" class="btn btn-primary btn-sm">Tambah Stock</a>
                    </div>
                    <div class="card-body table-border-style">
                    <?php echo $this->session->flashdata('msg'); ?>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Produk</th>
                                        <th>Stock</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($stock as $v): ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $v->namaproduk ?></td>
                                            <td><?= $v->stock ?></td>
                                            <td>
                                                <a href="<?= base_url('Admin/editStock/'); ?><?= $v->idstock; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="<?= base_url('Admin/hapusdataStock/'); ?><?= $v->idstock; ?>" class="btn btn-danger btn-sm hapus">Hapus</a>
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