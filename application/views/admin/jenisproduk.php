    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card">
            <?php
            $success_msg = $this->session->flashdata('success_msg');
            $error_msg = $this->session->flashdata('error_msg');

            if (!empty($success_msg)) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                '.$success_msg.'</div>';
            }

            if (!empty($error_msg)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                '.$error_msg.'</div>';
            }
            ?>
              <div class="card-header">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Tambah Data</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Produk</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach($data as $d):?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $d->jenis_produk?></td>
                        <td>
                        <a data-toggle="modal" data-target="#modal-edit<?=$d->id_jenis_produk;?>" class="btn btn-warning btn-circle btn-sm" data-popup="tooltip" data-placement="top" title="Edit Data">Edit</a> 
                            <a href="<?= base_url('Admin/deletejenisproduk/');?><?= $d->id_jenis_produk?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- TAMBAH DATA -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Jenis Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="<?= base_url('simpanjenisproduk');?>">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Jenis Produk</label>
                <input type="text" class="form-control" id="jenis_produk" name="jenis_produk">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <!-- TAMBAH DATA -->
<!-- EDIT DATA -->
<?php $no=0; foreach($data as $row): $no++; ?>
<div class="modal fade" id="modal-edit<?=$row->id_jenis_produk;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $judul?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('Admin/updatejenisproduk');?>" method="post">
          <div class="form-group">
            <input type="hidden" class="form-control" id="id_jenis_produk" name="id_jenis_produk" placeholder="" value="<?= $row->id_jenis_produk; ?>">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jenis Produk</label>
            <input type="text" class="form-control" id="jenis_produk" name="jenis_produk" value="<?= $row->jenis_produk ?>">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>