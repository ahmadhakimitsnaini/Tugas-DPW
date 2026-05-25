<?php
class Manusia
{
    // Deklarasi Variabel
    protected $name;
    protected $nik = "123212131243243";
    protected $umur; // Penambahan variabel umur

    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }

    // Mengubah private menjadi public agar bisa diakses dari luar kelas (index.php)
    // Atau bisa tetap private, namun harus dipanggil melalui fungsi public lain di dalam kelas ini.
    public function getNIK() 
    {
        return "NIK: " . $this->nik;
    }

    // Setter untuk umur
    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    // Getter untuk umur
    public function getUmur()
    {
        return $this->umur . " Tahun";
    }
}
?>