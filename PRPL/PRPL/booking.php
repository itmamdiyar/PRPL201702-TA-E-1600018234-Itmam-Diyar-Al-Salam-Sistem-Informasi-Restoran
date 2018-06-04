<center>

<h2>Daftar Reservasi Tempat </h2>

<h4>Pencarian (Tgl Awal - Tgl Akhir)</h4>
<form action="" method="POST">
<input type="date" name="tglawal">
<input type="date" name="tglakhir">
<input type="submit" class="btn btn" id="submit" name="submit2" value="Cari">
<input type="submit" class="btn btn" id="submit" name="submit1" value="Reset">
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

$sql = "SELECT * FROM reservation";

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
  
  $sql="SELECT * FROM  reservation ";
}
$data = $konek->query($sql);

//echo "<a href='index.php'>Kembali ke Menu</a>";
//echo "<h1>Daftar Pesanan</h1>";
//echo "<table>";
//echo "<table border-radius='1'>";
//echo "<table allign='center'>";
echo "<b><tr><td>No.</td><td><center>ID Reservasi</td><td><center>Nama Pelanggan</td><td><center>Email Pelanggan</td><td><center>No Telepon</td><td><center>Jumlah Orang</td><td><center>Reservasi On</td><td><center> Aksi</center></td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['id_reservasi']."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['email']."</td>";
	  echo "<td>".$row['phone']."</td>";
	  echo "<td>".$row['person']."</td>";
	  echo "<td>".$row['res']."</td>";
    echo "<td><center><a class='btn btn-primary' href='struk_reservasi.php?user=".$row['id_reservasi']."'>Cetak</a>";
    echo "<a class='btn btn-danger' href='delete_reservasi.php?user=".$row['id_reservasi']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
//echo "</table>";

$konek->close();
?>
</table></center>
