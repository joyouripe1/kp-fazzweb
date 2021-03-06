<div class="container-fluid">
    <button class="btn btn-sm btn-success mb-2" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th colspan="3">Opsi</th>
        </tr>
        <?php
        $no=1;
        foreach($barang as $brg) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $brg->produk ?></td>
            <td><?php echo $brg->keterangan ?></td>
            <td><?php echo $brg->kategori ?></td>
            <td><?php echo $brg->harga ?></td>
            <td><?php echo $brg->stok ?></td>
            
            <td><?php echo anchor('admin/data_barang/edit/' .$brg->id_produk, '<div class="btn btn-secondary btn-sm="><i class="fa fa-edit"></i>Edit</div>') ?></td>
            <td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_produk, '<div class="btn btn-danger btn-sm="><i class="fa fa-trash"></i>Hapus</div>') ?></td>            
        </tr>

        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INPUT DATA BARANG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="produk" class="form-control">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control">
                </div>
                <div class="form-group">
                    <label>Harga Barang</label>
                    <input type="text" name="harga" class="form-control">
                </div>
                <div class="form-group">
                    <label>Stok Barang</label>
                    <input type="text" name="stok" class="form-control">
                </div>
                <div class="form-group">
                    <label>Gambar Barang</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
    </div>
  </div>
</div>