<center><h2>Data Pelanggan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			
			<th><center>No</th>
			<th><center>Nama Pelanggan</th>
			<th><center>Email</th>
			<th><center>Foto</th>
			<th><center>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM users") ?>
		<?php while( $pecah = $ambil->fetch_assoc() ){?>
		<tr>
			<td><?php echo $nomor;  ?></td>
			<td><?php echo $pecah['nama_lengkap']; ?></td>
			<td><?php echo $pecah['email']; ?></td>
			<td>
				<center><img src="assets/img/<?php echo $pecah['foto']; ?>" width="50" height="50">
				</center></td>
			<td>
				<center><a href="" class="btn-danger btn">Hapus</a>
			</td>	
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>