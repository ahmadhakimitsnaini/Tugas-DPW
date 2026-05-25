<?php
class buah
{
    public $nama;
    protected $warna;
    private $berat; // diubah dari ejaan yang salah di modul

    // Setter untuk warna (mengatasi error protected)
    public function setWarna($w) {
        $this->warna = $w;
    }

    // Setter untuk berat (mengatasi error private)
    public function setBerat($b) {
        $this->berat = $b;
    }
}

$mango = new buah();
$mango->nama = 'Mango'; // Boleh karena public
$mango->setWarna('Yellow'); // Benar
$mango->setBerat('300'); // Benar

echo "Objek buah berhasil dimanipulasi tanpa error.";
?>