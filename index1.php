<!doctype html>
    <html>
        <head>
            <title>Aplikasi Penjualan</title>
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/bootstrap.css">
        </head>
        <body>
            <div id="container">
            <header>
              <center>  <h1>Data Transaksi</h1></center>
            </header>
            <!--menu -->
            <br>
            <div class="container">
                    <?php
                    include "db/koneksi.php";
                    $p=isset($_GET['page'])?$_GET['page']:null;
                    switch($p){
                        default:
                                          include "transaksi.php";
                            break;
                    }
                    ?>
            </div>
            </body>
    </html>