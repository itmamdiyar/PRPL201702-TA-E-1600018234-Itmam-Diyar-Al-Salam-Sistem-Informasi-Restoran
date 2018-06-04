<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="alert/css/sweetalert.css">	
</head>

<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "Sistem_Informasi_Restoran";

$konek = new mysqli($host, $username, $password , $db_name);

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$person = $_POST['person'];
$res = $_POST['res'];
$mess = $_POST['mess'];

$sql = "INSERT INTO Reservation (nama, email, phone, person, res,mess ) VALUES ('$nama','$email','$phone','$person','$res','$mess' ) ";

if($konek->query($sql)){
 echo " <center><h1>Pemesanan telah Berhasil</h1>";
  echo "<a href='struk_reservasi.php?user=$nama'</a> Cetak";
}else{
  echo "Data customer GAGAL ditambah : ".$konek->error."<br/>";
}

//$konek->close();

//echo "<br><a href='homepage.html'>Back to Homepage </a>";

?>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="alert/js/sweetalert.min.js"></script>
<script src="alert/js/qunit-1.18.0.js"></script>


</html>
