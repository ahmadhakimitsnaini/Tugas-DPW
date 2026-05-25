<?php
class buah2 
{
    public $name;
    public $warna;
    public $bobot;

    public function set_name($n) {
        $this->name = $n;
    }
    
    // UBAH dari protected menjadi public
    public function set_color($n) {
        $this->warna = $n;
    }
    
    // UBAH dari private menjadi public
    public function set_weight($n) {
        $this->bobot = $n;
    }
}

$mango = new buah2();
$mango->set_name('Mango');
$mango->set_color('Yellow');
$mango->set_weight('300');

echo "Method berhasil dipanggil tanpa error.";
?>