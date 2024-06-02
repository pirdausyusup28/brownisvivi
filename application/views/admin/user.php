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
                    <th>Nama User</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach($data as $d):?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $d->nama_user?></td>
                        <td><?= $d->username?></td>
                        <td><?= ($d->level==1)?"Administrator":"Customer"?></td>
                        <td>
                        <a data-toggle="modal" data-target="#modal-edit<?=$d->id_user;?>" class="btn btn-warning btn-circle btn-sm" data-popup="tooltip" data-placement="top" title="Edit Data">Edit</a> 
                            <a href="<?= base_url('Admin/deleteuser/');?><?= $d->id_user?>" class="btn btn-danger btn-sm">Hapus</a>
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
            <form method="post" action="<?= base_url('Admin/simpanuser');?>">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nama User</label>
                <input type="text" class="form-control" id="nama_user" name="nama_user">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">UserName</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password">
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
<div class="modal fade" id="modal-edit<?=$row->id_user;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $judul?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('Admin/updateuser');?>" method="post">
          <div class="form-group">
            <input type="hidden" class="form-control" id="id_user" name="id_user" placeholder="" value="<?= $row->id_user; ?>">
          </div>
          <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nama User</label>
                <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?= $row->nama_user ?>">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">UserName</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $row->username ?>">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Password Baru</label>
                <input type="text" class="form-control" id="password" name="password" >
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