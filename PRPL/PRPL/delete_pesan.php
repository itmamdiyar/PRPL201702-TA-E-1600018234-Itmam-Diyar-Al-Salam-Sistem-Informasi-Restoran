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

$user = $_GET['user'];

$sql = "DELETE from pesan where id_pesanan = '$user' ";

if($konek->query($sql)){
  echo "Data Pesanan BERHASIL dihapus!<br/>";
}else{
  echo "Data Pesanan GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<br><a href='index.php?halaman=pembelian'>Daftar Pesanan</a>";
?>
