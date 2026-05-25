<?php
require_once "Manusia.php";

class mahasiswa extends Manusia
{
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama)
    {
        // Memanfaatkan fungsi dari kelas induk (Manusia.php)
        $this->setNama($nama);
    }

    // Getter dan Setter NIM
    public function setNIM($nim)
    {
        $this->NIM = $nim;
    }
    public function getNIM()
    {
        return $this->NIM;
    }

    // Getter dan Setter Jurusan
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }
    public function getJurusan()
    {
        return $this->jurusan;
    }

    // Getter dan Setter Kelas
    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }
    public function getKelas()
    {
        return $this->kelas;
    }
}
?>