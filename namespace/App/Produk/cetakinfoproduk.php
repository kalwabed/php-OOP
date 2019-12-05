<?
class cetakinfoproduk // class ini menerima inputan object
{
    public $daftarProduk = []; // menyimpan produk2 yang akan dicetak sekaligus

    public function tambahProduk(Produk $produk) // yang didalamnya menerima object yang tipenya produk
    {
        $this->daftarProduk[] = $produk; // menambahkan elemen baru pada array diisi dengan produk
    }



    public function cetak() // hapus saja parameter sebelumnya karena sudah dilakukan oleh func tambahproduk
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProd()} <br>"; // buat nampilin info produk secara detail
        }

        return $str;
    }
}
