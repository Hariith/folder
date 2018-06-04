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

$customer = mysqli_query($konek, " SELECT * FROM customer where idcustomer='$idcustomer'");
$row = mysqli_fetch_array($customer);
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Hotel</title>
  </head>
  <body>
    <a href="index12.php">Kembali Ke Menu</a>
    <h1>Edit Data Customer</h1>
    <form action="update_customer.php" method="post">
      <td><input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>"/></td>
      <table>
        <tr>
          <td>ID Customer</td>
          <td>:</td>

          <td><input type="text" disabled  value="<?php echo $row['idcustomer'];?>"/></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="namacustomer" value="<?php echo $row['namacustomer'];?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><textarea name="alamatcustomer" value="" rows="8" cols="40"><?php echo $row['alamatcustomer'];?></textarea></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>
