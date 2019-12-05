<?
require_once 'App/init.php';

// $prod1 = new Buku("Edensor", "Andrea Hirata", "Bentang media", 85000, 100);
// $prod2 = new Film("Yowis Ben", "Moektito", "Rapi", 30000, 2);




// $cetakprod = new cetakinfoproduk();
// $cetakprod->tambahProduk($prod1); // nanti prod1 akan masuk ke daftarproduk
// $cetakprod->tambahProduk($prod2);
// echo $cetakprod->cetak();


// new App\Produk\User();
// echo "<br>";
// new App\Service\User();


use App\Produk\User as ProdukUser; // pengaliasan kalau namespace terlalu panjang, agar tidak menulis ulang
use App\Service\User as ServiceUser;

new ProdukUser;
echo "<br>";
new ServiceUser;
