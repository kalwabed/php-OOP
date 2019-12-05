<?


class pcl
{
    public $panca1;

    public function set($panca1)
    {
        $this->panca = $panca1;
    }
    public function get()
    {
        return "$this->panca";
    }
    public function tgl()
    {
        return "<br>Tanggal " . date("d F Y");
    }
}

$panca = new pcl();

$panca->set("Hari Kesaktian Pancasila");
