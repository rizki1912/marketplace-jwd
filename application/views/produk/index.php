<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $judul ;?></h1>
		<a href="<?php echo base_url('produk/add') ?>"
			class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></i> Tambah Data</a>
	</div>

	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="table" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No. </th>
							<th>Nama Produk</th>
							<th>Kategori</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						$i = 1;
              foreach($produk as $items) : ?>
							<tr>
								<td><?php echo $i++ ?></td>
								<td><?php echo $items["nama_produk"] ;?></td>
								<td><?php echo $items["kategori_produk"] ;?></td>
								<td><?php echo $items["harga"] ;?></td>
								<td><?php echo $items["stok"] ;?></td>
								<td>
									<a href="<?php echo base_url('produk/edit/'.$items['id_produk']) ?>" class="btn btn-warning">Update</a>
									<a href="<?php echo base_url('produk/delete/'.$items['id_produk']) ?>" class="btn btn-danger">Delete</a>
								</td>
							</tr>
					<?php endforeach ;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
