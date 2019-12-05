<?
// initiate menginisiasi
// require_once 'Produk/Infoprod.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Buku.php';
// require_once 'Produk/Film.php';
// require_once 'Produk/cetakinfoproduk.php';

spl_autoload_register(function ($class) {
    require_once  'Produk/' . $class . '.php';
});
