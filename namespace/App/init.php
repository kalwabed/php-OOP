<?
// initiate menginisiasi
// require_once 'Produk/Infoprod.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Buku.php';
// require_once 'Produk/Film.php';
// require_once 'Produk/cetakinfoproduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

spl_autoload_register(function ($class) {

    $class = explode('\\', $class); // App\Produk\User = ["App","Produk","User"]
    $class = end($class); // mengambil class user
    require_once  'Produk/' . $class . '.php';
});

spl_autoload_register(function ($class) {
    $class = explode('\\', $class); // App\Service\User = ["App","Service","User"]
    $class = end($class); // mengambil class user
    require_once   'Service/' . $class . '.php';
});
