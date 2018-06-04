<!DOCTYPE html>
<html>
<head>
	<title>Data Hotel</title>
	<style type="text/css">
	body{
		background-size:cover;
		
	}
	</style>
</head>
<body style="background-image:url(b.jpg)" background-size:cover>
	<a href="index.html"><font color="#ffffff">Kembali Ke Home </a>
	
	<div class="b">
	<form action="simpan_customer.php" method="post">

		<center><h1>Masukkan Data Customer</h1>
		<table>
			<tr>
				<td>ID Customer</td>
				<td> : </td>
				<td><input type="text" name="idcustomer" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><input type="text" name="namacustomer" required></td>
			</tr>
			<td>Jenis Kamar</td>
				<td> : </td>
				<td><input type="radio" name="jkel" value="Superior Rom" checked required>Superior Rom</input>
				<input type="radio" name="jkel" value="Classic Rom" checked required>Classic Rom</input>

				<input type="radio" name="jkel" value="Luxury Rom" checked required>Luxury Rom</input>
				</td>
			</tr>
			<tr>
				<td>checkin</td>
				<td> : </td>
				<td><input type="date" name="checkin" required></input></td>
			
			</tr>
			<tr>
				<td>checkout</td>
				<td> : </td>
				<td><input type="date" name="checkout" required></input></td>
			
			</tr>
			
			
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><textarea name="alamatcustomer" rows="8" cols="40" required> </textarea></td>
			</tr>
			
			<tr>
				<td colspan="2"></td>
				<td><input type="submit" value="Submit" required></td>
			</tr>
			</center>
		</table>
	</form>
	</div>
</body>
</html>