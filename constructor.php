<?


// jualan produk
// buku
// film

class Produk
{
    public $judul,  // nilai default dipindah ke construct
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) // variabel lokal yang belum tersangkut oleh property class
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        // otomatis dijalankan setiap ada $prod baru
    }

    public function getLabel()
    {
        return "$this->judul, $this->penulis,$this->penerbit,$this->harga"; // mengembalikan property yang ada di dalam kelas yang bersangkutan
    }
}



$prod1 = new Produk("Edensor", "Andrea Hirata", "Bentang media", 85000);

$prod2 = new Produk("Yowis Ben", "Moektito", "Rapi", 25000000);


echo "Buku: " . $prod1->getLabel();
echo "<br>";
echo "Film: " . $prod2->getLabel();
