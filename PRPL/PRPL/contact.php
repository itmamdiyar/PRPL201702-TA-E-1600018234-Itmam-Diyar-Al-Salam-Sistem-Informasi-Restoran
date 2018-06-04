<center><h2>Kritik & Saran</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th><center>No</th>
			<th><center>Nama</th>
			<th><center>Email</th>
			<th><center>Kritik dan Saran</th>
			<th><center>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM contact") ?>
		<?php while( $pecah = $ambil->fetch_assoc() ){?>
		<tr>
			<td><?php echo $nomor;  ?></td>
			<td><?php echo $pecah['username']; ?></td>
			<td><?php echo  $pecah['email2']; ?></td>
			<td><?php echo  $pecah['comm']; ?></td>
			<td>
				<center><a href="" class="btn-danger btn">Hapus</a>
			</td>	
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>