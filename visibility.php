<?


// jualan produk
// buku
// film

class Produk
{
    public $judul,  // nilai default dipindah ke construct
        $penulis,
        $penerbit;
    protected $diskon = 0;
    private
        $harga;

    public function __construct(
        $judul = "Judul",
        $penulis = "Penulis",
        $penerbit = "Penerbit",
        $harga = 0
    ) // variabel lokal yang belum tersangkut oleh property class
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        // otomatis dijalankan setiap ada $prod baru
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
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
    public $waktu;

    public function __construct(
        $judul = "Judul",
        $penulis = "Penulis",
        $penerbit = "Penerbit",
        $harga = 0,
        $waktu = 0
    ) {
        parent::__construct(
            $judul,
            $penulis,
            $penerbit,
            $harga
        );
        $this->waktu = $waktu;
    }

    public function getInfoProd()
    {
        $str = "Film : " . parent::getInfoProd()  . " ~ {$this->waktu} Jam."; // tidak mengulang hal yang sebelumnya pernah kita lakukan 
        return $str;
    }
}

class Buku extends Produk // child class // kalau class buku sudah di instance maka method getinfoprod produk tidak digunakan
{
    public $halaman;

    public function __construct(
        $judul = "Judul",
        $penulis = "Penulis",
        $penerbit = "Penerbit",
        $harga = 0,
        $halaman = 0
    ) {
        parent::__construct(
            $judul,
            $penulis,
            $penerbit,
            $harga
        );
        $this->halaman = $halaman;
    }

    public function getInfoProd()
    {
        $str = "Buku : " . parent::getInfoProd() . " - {$this->halaman} Halaman."; // parent itu adalah keyword yang mengambil property atau method yang ada di kelas parentnya
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

$prod1 = new Buku("Edensor", "Andrea Hirata", "Bentang media", 85000, 100);
$prod2 = new Film("Yowis Ben", "Moektito", "Rapi", 30000, 2);


echo $prod1->getInfoProd();
echo "<br>";
echo $prod2->getInfoProd();
echo "<hr>";

$prod2->setDiskon(20);
echo $prod2->getHarga();
