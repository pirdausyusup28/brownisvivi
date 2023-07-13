<div class="row">
 <div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <h5 class="mt-5">Form Booking Lapangan</h5>
          <hr>
          <?php echo form_open_multipart('Transaksi/upload'); ?>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Lapangan</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="namalapangan" name="namalapangan" value="de kings soccer" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Nama Customer</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="namauser" name="namauser" placeholder="Nama Customer">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Booking</label>
              <div class="col-sm-9">
                <input type="hidden" class="form-control" id="statusbooking" name="statusbooking" placeholder="" value="Offline">
                <!-- <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder=""> -->
                <select name="tanggal" id="tanggal" class="form-control" onchange="get_name()">
                    <option value=""></option>
                  <?php foreach ($tb as $b): ?>
                    <option value="<?= $b->tanggal ?>"><?= $b->tanggal ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Jam Booking</label>
              <div class="col-sm-9">
                <!-- <input type="time" class="form-control" id="jam" name="jam" placeholder=""> -->
                <!-- <select name="jam" id="jam" class="form-control">
                  <?php foreach ($tb as $b): ?>
                    <option value="<?= $b->jam ?>"><?= $b->jam ?></option>
                  <?php endforeach ?>
                </select> -->
                <select name="jam" id="jam" class="form-control"></select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Status Pembayaran</label>
              <div class="col-sm-9">
                <select name="statuspembayaran" id="statuspembayaran" class="form-control">
                  <option value="Belum Bayar">Belum Bayar</option>
                  <option value="DP">DP</option>
                  <option value="Lunas">Lunas</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Bukti Pembayaran</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="buktipembayaran" name="buktipembayaran" placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn  btn-primary">Simpan</button>
              </div>
            </div>
          <?php echo form_close() ?>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
  function get_name() {
    let tanggal = $("#tanggal").val();
    let url = '<?= base_url("Transaksi/get_jam/") ?>'+tanggal;
    $.get(url,function (data) {
      let opt=''
      $.each(data,function (i,v) {
        opt+="<option value='"+v.jam+"'>"+v.jam+"</option>";
      });
      $('#jam').html(opt);
      console.log(data[0].jam)
    });
  }

  let kembali = "<?php echo base_url("Wo");?>";
  $('#butsave').on('click', function() {
    var nowo                  = $('#nowo').val();
    var tanggal               = $('#tanggal').val();
    var project               = $('#project').val();
    var cp                    = $('#cp').val();
    var pekerjaan             = $('#pekerjaan').val();
    var daun                  = $('#daun').val();
    var nat                   = $('#nat').val();
    var qty                   = $('#qty').val();
    var idsatuan              = $('#idsatuan').val();
    var idfinishing           = $('#idfinishing').val();
    var detailaksesoris       = $('#detailaksesoris').val();
    var keterangan            = $('#keterangan').val();
    var tanggaldelivery       = $('#tanggaldelivery').val();
    var alamatdelivery        = $('#alamatdelivery').val();
    var includepemasangan     = $('#includepemasangan').val();
    var keteranganpemasangan  = $('#keteranganpemasangan').val();
    var orderby               = $('#orderby').val();
    var receivedby            = $('#receivedby').val();
    if(nowo!=""){
      // $("#butsave").attr("disabled", "disabled");
      $.ajax({
        url: "<?php echo base_url("Wo/savedata");?>",
        type: "POST",
        data: {
          type: 1,
          nowo,
          tanggal,
          project,
          cp,
          pekerjaan,
          daun,
          nat,
          qty,
          idsatuan,
          idfinishing,
          detailaksesoris,
          keterangan,
          tanggaldelivery,
          alamatdelivery,
          includepemasangan,
          keteranganpemasangan,
          orderby,
          receivedby
        },
        cache: false,
        success: function(dataResult){
          var dataResult = JSON.parse(dataResult);
          if(dataResult.statusCode==200){
            $('#fupForm').find('input:text').val('');
            $("#success").show();
            alert('Data added successfully !')
            window.location.replace(kembali);
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