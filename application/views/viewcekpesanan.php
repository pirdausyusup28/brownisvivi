<div class="container-fluid bg-primary mb-3" style="background-color: #3e2e30 !important;">
    <div class="d-flex flex-column align-items-center justify-content-center"style="min-height: 200px">
    <h3 class="display-3 font-weight-bold text-white">Cek Pesanan</h3>
    </div>
</div>
<div class="container-fluid pt-5">
    <div class="container">
    <div class="text-center pb-2">
        <p class="section-title px-5">
        <span class="px-2">Masukan Kode Pesanan : </span>
        </p>
        <input type="text" id="kodepesanan" name="kodepesanan" class="form-control text-center"><br>
        <button class="btn btn-danger btn-block" type="button" id="cekdatapesanan">Cari</button><br>
        <table class="table table-bordered" id="tabeldata">
            <thead>
                <tr>
                    <th>Kode Pesanan</th>
                    <th><span id="kodenya"></span></th>
                </tr>
                <tr>
                    <th>Nama Produk</th>
                    <th><span id="namaproduk"></span></th>
                </tr>
                <tr>
                    <th>Nama Pemesan</th>
                    <th><span id="cs"></span></th>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th><span id="alamat"></span></th>
                </tr>
                <tr>
                    <th>Pembayaran</th>
                    <th><span id="pembayaran"></span></th>
                </tr>
                <tr>
                    <th>Tanggal Order</th>
                    <th><span id="tglorder"></span></th>
                </tr>
                <tr>
                    <th>Harga</th>
                    <th><span id="harga"></span></th>
                </tr>
                <tr>
                    <th>Status Pesanan</th>
                    <th><span id="status"></span></th>
                </tr>
            </thead>
        </table>

        <!-- <h1 class="mb-4">Kontak kami seputar brownies nya</h1> -->
    </div>
    <div class="row">
        <div class="col-lg-12 mb-5 ">
        <div class="d-flex">
        </div>
        </div>
    </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    $('#tabeldata').hide()
    $('#cekdatapesanan').click(function(e) {
        e.preventDefault();
        var formData = {
            kodepesanan: $('#kodepesanan').val()
        };
        $.ajax({
            url: '<?= base_url('customer/cekdatapesanan')?>',
            type: 'POST',
            data: formData,
            success: function(response) {
                if(response.status == "success"){
                    $('#tabeldata').show()
                    console.log(response.data[0]);
                    $('#kodenya').text(response.data[0].idproduk)
                    $('#namaproduk').text(response.data[0].namaproduk)
                    $('#cs').text(response.data[0].namacustomer)
                    $('#alamat').text(response.data[0].alamat)
                    $('#pembayaran').text(response.data[0].pembayaran)
                    $('#tglorder').text(response.data[0].tanggalpesan)
                    $('#harga').text(response.data[0].harga)
                    $('#status').text(response.data[0].statuspesanan)
                }else{
                    $('#tabeldata').hide()
                    alert("Kode Produk Tidak ada")
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });
});

</script>
