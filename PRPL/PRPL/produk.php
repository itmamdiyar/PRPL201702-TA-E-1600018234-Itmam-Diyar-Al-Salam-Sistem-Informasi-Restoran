<center><h2>Produk</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th><center>No</th>
			<th><center>Nama</th>
			<th><center>Harga</th>
			<th><center>Foto</th>
			<th><center>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM menu") ?>
		<?php while( $pecah = $ambil->fetch_assoc() ){?>
		<tr>
			<td><?php echo $nomor;  ?></td>
			<td><?php echo $pecah['nama_menu']; ?></td>
			<td><?php echo "Rp. ".number_format($pecah['harga']); ?></td>
			<td>
				<center><img src="assets/img/<?php echo $pecah['foto']; ?>" width="50" height="50">
			</td>
			<td>
				<center><a href="" class="btn-danger btn">Hapus</a>
				<a href="" class="btn-warning btn">Ubah</a>
			</td>	
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

