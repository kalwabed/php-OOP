<?


// jualan produk
// buku
// film

class Produk
{
    public $judul,  // nilai default dipindah ke construct
        $penulis,
        $penerbit,
        $harga,
        $halaman,
        $waktu;

    public function __construct(
        $judul = "Judul",
        $penulis = "Penulis",
        $penerbit = "Penerbit",
        $harga = 0,
        $halaman = 0,
        $waktu = 0
    ) // variabel lokal yang belum tersangkut oleh property class
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktu = $waktu;
        // otomatis dijalankan setiap ada $prod baru
    }

    public function getLabel()
    {
        return "$this->penulis | $this->penerbit"; // mengembalikan property yang ada di dalam kelas yang bersangkutan
    }

    public function getInfoProd()
    {
        $str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";

        return $str;
    }
}

class Film extends Produk // child class // kalau class film sudah di instance maka method getinfoprod produk tidak digunakan
{
    public function getInfoProd()
    {
        $str = "Film : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}) ~ {$this->waktu} Jam.";
        return $str;
    }
}

class Buku extends Produk // child class // kalau class buku sudah di instance maka method getinfoprod produk tidak digunakan
{
    public function getInfoProd()
    {
        $str = "Buku : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}) - {$this->halaman} Halaman.";
        return $str;
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

$prod1 = new Buku("Edensor", "Andrea Hirata", "Bentang media", 85000, 100, 0);
$prod2 = new Film("Yowis Ben", "Moektito", "Rapi", 30000, 0, 2);


echo $prod1->getInfoProd();
echo "<br>";
echo $prod2->getInfoProd();
