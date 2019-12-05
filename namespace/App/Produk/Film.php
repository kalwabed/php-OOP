<?
class Film extends Produk implements Infoprod // child class // kalau class film sudah di instance maka method getinfoprod produk tidak digunakan
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

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProd()
    {
        $str = "Film : " . $this->getInfo()  . " ~ {$this->waktu} Jam."; // tidak mengulang hal yang sebelumnya pernah kita lakukan 
        return $str;
    }
}
