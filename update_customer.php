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

$id = $_POST ['idcustomer'];
$nama = $_POST ['namacustomer'];
$alamat = $_POST ['alamatcustomer'];

$sql = "UPDATE customer SET namacustomer='$nama',alamatcustomer='$alamat' WHERE idcustomer='$id'";
if($konek->query($sql)){
  echo "Data Customer BERHASIL diedit!<br/>";
}else{
  echo "Data Customer GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_customer.php'>Daftar Customer</a>";
?>
