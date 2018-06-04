<html>
<div id="ini">
 <form action="filter.php" method="POST">           
            <select name="start">
                <option value="">...</option>
                <option value="x">Superior Room</option>
                <option value="y">Classic Room</option>
                <option value="z">Luxury Room</option>
            </select>            
            <input type="submit" name="search" value="Cari">            
            
        </form>     


</html>


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
		
      <td colspan=2>Aksi</td>
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
	

	echo "<td><a href='formupdate_customer.php?idcustomer=".$row['idcustomer']."'>Edit</a></td>";
    echo "<td><a href='delete_customer.php?idcustomer=".$row['idcustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
