<center>
	<h2>Daftar Pesanan </h2>
<h4>Pencarian (Tgl Awal - Tgl Akhir)</h4>
<form action="" method="POST">
<input type="date" name="tglawal">
<input type="date" name="tglakhir">
<input type="submit" id="submit" class="btn btn" name="submit2" value="Cari">
<input type="submit" id="submit" class="btn btn" name="submit1" value="Reset">
</form>
<br>
<table class="table table-bordered">
<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "Sistem_Informasi_Restoran";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM pesan";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM  pesan where username like '%$qcari%' or tanggal like '%$qcari' or alamat like '%$qcari' ";
}

if(isset($_POST['submit2'])){
  $qcari=$_POST['tglawal'];
  $qcari2=$_POST['tglakhir'];
  $sql="SELECT * FROM  pesan where tanggal between '$qcari' and '$qcari2'";
}

if(isset($_POST['submit1'])){
  
  $sql="SELECT * FROM  pesan ";
}
$data = $konek->query($sql);

//echo "<a href='index.php'>Kembali ke Menu</a>";
//echo "<h1>Daftar Pesanan</h1>";
//echo "<table>";
//echo "<table border-radius='1'>";
//echo "<table allign='center'>";
echo "<b><tr><td>No.</td><td><center>ID Pesanan</td><td><center>Nama Customer</td><td><center>Alamat Customer</td><td><center>Tanggal Pesan</td><td><center>Total Barang</td><td><center>Total Biaya</td><td><center> Aksi</center></td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['id_pesanan']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['alamat']."</td>";
	  echo "<td>".$row['tanggal']."</td>";
	  echo "<td>".$row['totalbarang']."</td>";
	  echo "<td>".$row['bayar']."</td>";
    echo " <td><center><a class='btn btn-primary' href='struck.php?user=".$row['id_pesanan']."'>Cetak</a>";
    echo "<a class='btn btn-danger' href='delete_pesan.php?user=".$row['id_pesanan']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
//echo "</table>";

$konek->close();
?>
</table></center>
</table>