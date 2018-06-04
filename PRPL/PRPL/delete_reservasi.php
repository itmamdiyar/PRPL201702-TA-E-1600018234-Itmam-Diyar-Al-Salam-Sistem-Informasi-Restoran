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

$sql = "DELETE from reservation where id_reservasi = '$user' ";

if($konek->query($sql)){
  echo "Data Reservasi BERHASIL dihapus!<br/>";
}else{
  echo "Data Reservasi GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<br><a href='index.php?halaman=booking'>Daftar Pesanan</a>";
?>
