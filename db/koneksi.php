<?php
$srvr="localhost"; 
$db="transaksi"; 
$usr="root";
$pwd="";
include_once 'mysql.php';
mysql_connect($srvr,$usr,$pwd);
mysql_select_db($db);
?>