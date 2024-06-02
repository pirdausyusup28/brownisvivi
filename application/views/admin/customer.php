    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Username</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach($data as $d):?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $d->nama_user?></td>
                        <td><?= $d->username?></td>
                    </tr>
                    <?php endforeach?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </section>