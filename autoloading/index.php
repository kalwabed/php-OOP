<?
require_once 'App/init.php';

$prod1 = new Buku("Edensor", "Andrea Hirata", "Bentang media", 85000, 100);
$prod2 = new Film("Yowis Ben", "Moektito", "Rapi", 30000, 2);




$cetakprod = new cetakinfoproduk();
$cetakprod->tambahProduk($prod1); // nanti prod1 akan masuk ke daftarproduk
$cetakprod->tambahProduk($prod2);
echo $cetakprod->cetak();
