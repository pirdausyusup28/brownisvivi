<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pesanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <table>
        <tr>
            <th><img src="<?= base_url('images/logo.jpg');?>" style="width:100px;height:100px" alt="Logo"></th>
            <th><p style="text-align:center;font-size:16px"><b>Laporan Pesanan Brownis Vivi</b></p></th>
        </tr>
    </table>
<br>

<table class="table table-striped table-bordered table-sm">
    <thead style="background-color:brown;color:white;font-size: 11px;">
        <tr>
            <th>#</th>
            <th>ID Pesanan</th>
            <!-- <th>ID Produk</th> -->
            <th>Nama Customer</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Nama Brownis</th>
            <th>Harga</th>
            <th>Tanggal Pesan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody style="font-size: 11px;">
        <?php $no=1; foreach ($pesanan as $p): ?>

        <tr>
            <td><?= $no++ ?></td>
            <!-- <td><?= $p->id ?></td> -->
            <td><?= $p->idproduk ?></td>
            <td><?= $p->namacustomer ?></td>
            <td><?= $p->nohp ?></td>
            <td><?= $p->alamat ?></td>
            <td><?= $p->namaproduk ?></td>
            <td><?= $p->harga ?></td>
            <td><?= $p->tanggalpesan ?></td>
            <td><?= $p->statuspesanan ?></td>
        </tr>
    <?php endforeach ?>
</tbody>
</table>
</body>
</html>
