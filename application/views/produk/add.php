<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
	</div>

	<div class="card">
		<div class="card-body">
		<form action="<?php echo base_url('produk/add') ;?>" method="POST">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="form-group mb-3 w-50">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= set_value('nama_produk') ;?>">
										<?= form_error('nama_produk', '<small class="text-danger">', '</small>') ;?>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="form-group mb-3 w-50">
                    <label>Kategori Produk</label>
                    <input type="text" name="kategori_produk" id="kategori_produk" class="form-control" value="<?= set_value('kategori_produk') ;?>">
										<?= form_error('kategori_produk', '<small class="text-danger">', '</small>') ;?>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="form-group mb-3 w-50">
                    <label>Harga</label>
                    <input type="number" min="0" name="harga" id="harga" class="form-control" value="<?= set_value('harga') ;?>">    
										<?= form_error('harga', '<small class="text-danger">', '</small>') ;?>
								</div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="form-group mb-3 w-50">
                    <label>Stok</label>
                    <input type="number" min="0" name="stok" id="stok" class="form-control" value="<?= set_value('stok') ;?>">    
										<?= form_error('stok', '<small class="text-danger">', '</small>') ;?>
								</div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <input type="submit" class="btn btn-md btn-primary rounded-75" value="Submit">
            </div>
        </div>
    </form>
		</div>
	</div>

</div>
