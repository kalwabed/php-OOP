<?


// jualan produk
// buku
// film

class Produk
{
    public $judul = "Judul",  // nilai default
        $penulis = "Penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->judul, $this->penulis"; // mengembalikan property yang ada di dalam kelas yang bersangkutan
    }
}


// $prod1 = new Produk();
// $prod1->judul = "Naruto"; // menimpa property judul dengan nilainya menjadi naruto
// var_dump($prod1);

// $prod2 = new Produk();
// var_dump($prod2->judul); // hanya menampilkan judul dari instance prod2


$prod3 = new Produk();

$prod3->judul = "Edensor";
$prod3->penulis = "Andrea Hirata";
$prod3->penerbit = "Pustaka Media";
$prod3->harga = 85000;

// echo "Buku: $prod3->judul, Penulis: $prod3->penulis";
// echo "<br>";

// echo $prod3->getLabel(); // hasilnya adalah edensor karena sudah ditimpa dengan nilai baru sebelumnya


$prod4 = new Produk();

$prod4->judul = "Yowis Ben";
$prod4->penulis = "Moektito";
$prod4->penerbit = "Rapi Film";
$prod4->harga = 35000000;

echo "Buku: " . $prod3->getLabel();
echo "<br>";
echo "Film: " . $prod4->getLabel();
