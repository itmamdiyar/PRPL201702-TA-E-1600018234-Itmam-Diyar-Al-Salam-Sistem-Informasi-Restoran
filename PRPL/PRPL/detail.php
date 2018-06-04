<h2>Detail Pembelian</h2>

<?php  
	$ambil = $koneksi->query("SELECT * FROM pesan JOIN users ON pesan.user_id=users.user_id where pesan.id_pesanan='$_GET[id]'");
	$detail = $ambil->fetch_assoc();
?>


<h3><?php echo $detail['nama_lengkap']; ?></h3> <br>
<p>
	Username 	: <?php echo $detail['username'];  ?> <br>
	Email 		: <?php echo $detail['email'];  ?> <br>
	Alamat 		: <?php echo $detail['alamat'];  ?> <br>
</p>
<p>
	Tanggal : <?php echo $detail['tanggal'];  ?> <br>
	Total : Rp. <?php echo $detail['bayar'];  ?> <br>
</p>

<?php
	$ambil2 = $koneksi->query("SELECT * FROM menu");
	$menu1 = $koneksi->query("SELECT menu1,menu2,menu3 from pesan");
	$ambil3 = $koneksi->query("SELECT * FROM pesan where id_pesanan='$_GET[id]'");
	
?>

<table class="table table-bordered">
	<thead>
		<tr>
			<th><center>No</th>
			<th><center>Nama Produk</th>
			<th><center>Harga</th>
			<th><center>Jumlah</th>
			<th><center>SubTotal</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;

		while($pecah2 = $ambil3->fetch_assoc()){
			while($pecah = $ambil2->fetch_assoc()){
		 ?>
		<tr>
			<td><?php echo "<center>".$nomor;  ?></td>
			<td><?php echo "<center>".$pecah['nama_menu']; ?></td>
			<td><?php echo "<center>Rp. ".number_format($pecah['harga']); ?></td>
			<td><?php echo "<center>".$pecah2['menu1']; ?></td>
			<td><?php echo "<center>Rp. ".number_format($pecah2['menu1']*$pecah['harga']); ?></td>
		</tr>
		<?php $nomor++; ?>
		<?php }} ?>	
	</tbody>
</table>

<a href="index.php?halaman=cetak&id=<?php echo $detail['id_pesanan']; ?>"><center>Cetak</a>