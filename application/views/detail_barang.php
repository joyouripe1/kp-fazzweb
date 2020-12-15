<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
        <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>

    <style>
    .produk{
        margin-top: 30px;
    }
    </style>

    <div class="produk container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <div class="container-fluid">
            <div class="card">
                <h5 class="card-header">Detail Produk</h5>
                <div class="card-body">

                    <?php foreach($produk as $pdk): ?>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo base_url().'/uploads/'.$pdk->gambar ?>" class="card-img-top">
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <td>Nama Produk</td>
                                    <td><strong><?php echo $pdk->produk ?></strong></td>
                                </tr>

                                <tr>
                                    <td>Keterangan</td>
                                    <td><strong><?php echo $pdk->keterangan ?></strong></td>
                                </tr>

                                <tr>
                                    <td>Kategori</td>
                                    <td><strong><?php echo $pdk->kategori ?></strong></td>
                                </tr>

                                <tr>
                                    <td>Stok</td>
                                    <td><strong><?php echo $pdk->stok ?></strong></td>
                                </tr>

                                <tr>
                                    <td>Harga</td>
                                    <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($pdk->harga,0,',','.') ?></div></strong></td>
                                </tr>
                            </table>

                            <?php echo anchor('home/tambah_ke_keranjang/'.$pdk->id_produk,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                            <?php echo anchor('home/index/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                        </div>
                    
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        </div>
        <div class="col-md-1"></div>
      </div>
    </div>

        </body>
</html>