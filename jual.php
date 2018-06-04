<html>
<title>TOKO ABADI</title>
</head>	

<body>
<center> <!--membuat posisi form di tengah-->
    <form method="post" action="Transaksi.php"> <!--berguna untuk menampilkan hasil ke laman berikutnya yaitu "transaksi.php"-->
    <table bgcolor="#99CC99" border="2" cellpadding="1" width="400">
        <tr>
            <td colspan="3" bgcolor="#9900CC" align="center"><h2>Transaksi</h2></td>
        </tr>
        <tr align="center" bgcolor="#999999">
            <td><b>NAMA</b></td>
            <td><b>HARGA</b></td>
            <td><b>QTY</b></td>
        </tr>
        <tr>
            <td>Standard Room</td>
            <td>Rp. 10.000</td>
            <td>
            <input type="hidden" name="nama[]" value="Standard Room" /> <!--input yang kita sembunyikan dan memiliki nilai-->
            <input type="hidden" name="harga[]" value="10000" /> <!--input yang kita sembunyikan dan memiliki nilai-->
            <input type="text" name="qty[]" size="10" maxlength="5" /> <!--input teks untuk memasukkan nilai-->
            </td>
        </tr>
        <tr>
            <td>Superior Room</td>
            <td>Rp. 2.000</td>
            <td>
            <input type="hidden" name="nama[]" value="Superior Room" />
            <input type="hidden" name="harga[]" value="2000" />
            <input type="text" name="qty[]" size="10" maxlength="5"/>
            </td>
        </tr>
        <tr>
            <td>Deluxe Room</td>
            <td>Rp. 7.000</td>
            <td>
            <input type="hidden" name="nama[]" value="Deluxe Room" />
            <input type="hidden" name="harga[]" value="7000" />
            <input type="text" name="qty[]" size="10" maxlength="5" />
            </td>
        </tr>
        
        <tr>
            <td colspan="3" bgcolor="#9933CC" align="center"><input type="submit" value="HITUNG" name="submit" /></td><!--button / tombol untuk menghitung hasil akhir-->
        </tr>
        <tr>
            <td colspan="3" align="center" height="10"><h6>Pembelian di atas Rp.100.000 discount 10%, di atas Rp.50.000 discount 25%</h6></td>
        </tr>
    </table>
    </form>
</center>
</body>
</html>
