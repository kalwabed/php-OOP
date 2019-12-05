<?
class ContohStatic
{
    // kalau ingin mengakses property dan method langsung dalam konteks kelas gunakan static
    // nilai static akan selalu tetap meskipun obj di instance berkali-kali
    public static $angka = 13;
    public static function halo()
    {
        return "Halo, Kalwabed Rizki " . self::$angka++ . " Kali <br>"; // karena $angka tidak di instance maka gunakan self untuk memanggil
    }
}

echo ContohStatic::$angka;
echo "<br>";                // cara mengakses property dan method statis
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();
echo ContohStatic::halo();
echo ContohStatic::halo();
echo ContohStatic::halo();
