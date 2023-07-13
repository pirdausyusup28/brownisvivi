<div class="row">
  <div class="col-md-12">
     <div class="card">
        <div class="card-header">
           <h5>List Data Transaksi </h5>
           <a href="<?= base_url('Transaksi/formtransaksi') ?>" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">
          <div class="alert alert-primary" role="alert">
            <?php echo $this->session->flashdata('msg') ?>
          </div>
           <table class="table table-striped table-sm">
              <thead>
                 <tr>
                    <th>No</th>
                    <th>Nama Lapangan</th>
                    <!-- <th>Kode Booking</th> -->
                    <th>Nama Customer</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Status Pembayaran</th>
                    <th>Booking Via</th>
                    <!-- <th>Bukti Pembayaran</th> -->
                    <th>Actions</th>
                 </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($list as $t): ?>
                  <tr>
                      <th><?= $no++ ?></th>
                      <th><?= $t->namalapangan ?></th>
                      <!-- <th><?= $t->kodebooking ?></th> -->
                      <th><?= $t->namauser ?></th>
                      <th><?= $t->tanggal ?></th>
                      <th><?= $t->jam ?></th>
                      <th><?= $t->statuspembayaran ?></th>
                      <th><?= $t->statusbooking ?></th>
                      <!-- <th><?= $t->buktipembayaran ?></th> -->
                      <th>
                        <!-- <button type="button" class="btn btn-success btn-sm">Detail</button> -->
                        <a href="<?= base_url('Transaksi/Cetak/') ?><?= $t->idtransaksi ?>"  class="btn btn-success btn-sm">Cetak</a>
                        <a href="<?= base_url('Transaksi/Edit/') ?><?= $t->idtransaksi ?>"  class="btn btn-warning btn-sm">Edit</a>
                      </th>
                    </tr>
                <?php endforeach ?>
              </tbody>
           </table>
        </div>
     </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
 $('#butsave').on('click', function() {
   var kodeclient = $('#kodeclient').val();
   var namaclient = $('#namaclient').val();
   var modal = $(this);
   if(kodeclient!="" && namaclient!=""){
    $("#butsave").attr("disabled", "disabled");
    $.ajax({
     url: "<?php echo base_url("Dataclient/savedata");?>",
     type: "POST",
     data: {
      type: 1,
      kodeclient: kodeclient,
      namaclient: namaclient
   },
   cache: false,
   success: function(dataResult){
      var dataResult = JSON.parse(dataResult);
      if(dataResult.statusCode==200){
       $("#butsave").removeAttr("disabled");
       $('#fupForm').find('input:text').val('');
       redire
       $("#success").show();
       $('#success').html('Data added successfully !');            
    }
    else if(dataResult.statusCode==201){
     alert("Error occured !");
  }

}
});
 }
 else{
    alert('Please fill all the field !');
 }
});
</script>