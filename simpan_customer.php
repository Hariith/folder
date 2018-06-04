<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "ukm";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_POST ['idcustomer'];
$namacustomer = $_POST ['namacustomer'];
$alamatcustomer = $_POST ['alamatcustomer'];
$jkel =$_POST ['jkel'];
$checkin = $_POST ['checkin'];
$checkout = $_POST ['checkout'];


$sql = "INSERT INTO customer(idcustomer, namacustomer, alamatcustomer, jkel, checkin, checkout) VALUES ('$idcustomer','$namacustomer','$alamatcustomer','$jkel','$checkin','$checkout')";
if($konek->query($sql)){
	echo "Data Customer Berhasil Di tambah! <br/>";
}
else{
	echo "Data Customer Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();



$host = "localhost";
$username = "root";
$password = "";
$db_name = "ukm";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM customer";
$data = $konek->query($sql);

echo "<a href='index.html'>Kembali ke Menu</a>";
echo "<h1>Daftar Customer</h1>";
echo "<table border='1'>";
echo "<tr>
		<td>ID Customer</td>
      <td>Nama Customer</td>
      <td>Alamat Customer</td>
      <td>Kamar</td>
	  <td>checkin</td>
   	  <td>checkout</td>
	
      
         </tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
     
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['namacustomer']."</td>";
    echo "<td>".$row['alamatcustomer']."</td>";
    echo "<td>".$row['jkel']."</td>";
	echo "<td>".$row['checkin']."</td>";
	echo "<td>".$row['checkout']."</td>";

  
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();

?>