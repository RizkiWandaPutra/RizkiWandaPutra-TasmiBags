<?php
include "proses/connect.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TasmiBags - Aplikasi Penjualan Tas dan sepatu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <h2>Detail Pembelian</h2><br>
    <?php
    $ambil = $conn->query("SELECT * FROM tb_pembelian JOIN tb_user ON tb_pembelian.id_pelanggan=tb_user.id WHERE tb_pembelian.id_pembelian='$_GET[id]'");
    $detail = $ambil->fetch_assoc();
    ?>
    

    <div class="row">
        <div class="col-md-4">
            <h4>Pembelian</h4>
            <strong>No. Pembelian: <?php echo $detail['id_pembelian'] ?></strong><br>
            Tanggal: <?php echo $detail['tanggal_pembelian']; ?><br>
            Total: Rp. <?php echo number_format($detail['total_pembelian']); ?>
        </div>
        <div class="col-md-4">
            <h4>Pelanggan</h4>
            <strong>
                <?php echo $detail['nama']; ?>
            </strong><br>
            <p>
        
        
    </p>
        </div>
        <div class="col-md-4">
            <h4>Pengiriman</h4>
            <strong><?php echo $detail['nama_kota'] ?></strong><br>
            Ongkos Kirim: Rp. <br>
            Alamat: <?php echo $detail['alamat_pengiriman']; ?>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>SubTotal</th>
            </tr>
        </thead>

        <body>
            <?php $nomor = 1; ?>
            <?php $ambil = $conn->query("SELECT * FROM tb_pembelian_produk WHERE id_pembelian='$_GET[id]'") ?>
            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td>
                    1
                </td>
                <td>
                    
                </td>
                <td>
                    Rp.
                    
                </td>
                <td>
                    
                </td>
                <td>
                    Rp.
                    
                </td>
            </tr>
            <?php $nomor++; ?>
            <?php } ?>
        </body>
    </table>

    <div class="row">
        <div class="col-md-5">
            <div class="alert alert-info">
                <p>
                    Silahkan Melakukan Pembayaran sebesar Rp.
                    <?php echo number_format($detail['total_pembelian']); ?><br>
                    <strong>BANK BSI . 1378640973975</strong><br>
                    <strong>AN . Rizki Wanda Putra </strong>
                </p>
            </div>
        </div>
    </div>
</body>