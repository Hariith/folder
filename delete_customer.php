<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "ukm";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_GET['idcustomer'];

$sql = "DELETE FROM customer WHERE idcustomer='$idcustomer'";
if($konek->query($sql)){
  echo "Data Customer BERHASIL dihapus!<br/>";
}else{
  echo "Data Customer GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_customer.php'>Daftar Customer</a>";
?>
