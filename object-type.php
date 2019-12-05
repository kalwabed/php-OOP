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
        return "$this->penulis | $this->penerbit"; // mengembalikan property yang ada di dalam kelas yang bersangkutan
    }
}


class cetakinfoproduk // class ini menerima inputan object
{
    public function cetak(Produk $produk) // hanya menerima dari kelas Produk
    {
        $str = "{$produk->judul} | {$produk->getLabel()} ( Rp. {$produk->harga})";
        return $str;
    }
}

$prod1 = new Produk("Edensor", "Andrea Hirata", "Bentang media", 85000);
$prod2 = new Produk("Yowis Ben", "Moektito", "Rapi", 25000000);


echo "Buku: " . $prod1->getLabel();
echo "<br>";
echo "Film: " . $prod2->getLabel();
echo "<br>";

$infoproduk1 = new cetakinfoproduk();
echo $infoproduk1->cetak($prod1); // harus instance dari class Produk
