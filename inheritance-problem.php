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
        $waktu,
        $tipe;

    public function __construct(
        $judul = "Judul",
        $penulis = "Penulis",
        $penerbit = "Penerbit",
        $harga = 0,
        $halaman = 0,
        $waktu = 0,
        $tipe
    ) // variabel lokal yang belum tersangkut oleh property class
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktu = $waktu;
        $this->tipe = $tipe;
        // otomatis dijalankan setiap ada $prod baru
    }

    public function getLabel()
    {
        return "$this->penulis | $this->penerbit"; // mengembalikan property yang ada di dalam kelas yang bersangkutan
    }

    public function getInfoFull()
    {
        // buku : Edensor | Andrea Hirata | Bentang media | Rp. 80000 | - 100 Halaman
        // film : Yowis Ben | Moektito | Rapi Film | Rp. 30000 | ~ 2 Jam
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";

        if ($this->tipe == "Buku") {
            $str .= " - {$this->halaman} Halaman.";  // menggabungkan dan menambahkan
        } elseif ($this->tipe == "Film") {
            $str .= " ~ {$this->waktu} Jam.";
        }
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

$prod1 = new Produk("Edensor", "Andrea Hirata", "Bentang media", 85000, 100, 0, "Buku");
$prod2 = new Produk("Yowis Ben", "Moektito", "Rapi", 30000, 0, 2, "Film");


echo $prod1->getInfoFull();
echo "<br>";
echo $prod2->getInfoFull();
