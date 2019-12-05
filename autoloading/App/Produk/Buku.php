<?

class Buku extends Produk implements Infoprod // child class // kalau class buku sudah di instance maka method getinfoprod produk tidak digunakan
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

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProd()
    {
        $str = "Buku : " . $this->getInfo() . " - {$this->halaman} Halaman."; // parent itu adalah keyword yang mengambil property atau method yang ada di kelas parentnya
        return $str;
    }
}
