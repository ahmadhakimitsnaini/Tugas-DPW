<?php
class akunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama; // Penambahan variabel nama

    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
    }

    // Getter & Setter untuk Nama
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    // Fungsi menambah jumlah uang
    public function tambahUang($nominal)
    {
        $this->jmlUang += $nominal;
        return "Berhasil menambah Rp " . number_format($nominal, 0, ',', '.');
    }

    // Fungsi mengurangi jumlah uang
    public function kurangiUang($nominal)
    {
        if ($this->jmlUang >= $nominal) {
            $this->jmlUang -= $nominal;
            return "Berhasil menarik Rp " . number_format($nominal, 0, ',', '.');
        } else {
            return "Saldo tidak mencukupi!";
        }
    }

    // Fungsi menampilkan jumlah uang
    public function cekSaldo()
    {
        return "Saldo Anda saat ini: Rp " . number_format($this->jmlUang, 0, ',', '.');
    }

    // Fungsi menghitung pajak (11%)
    public function hitungPajak()
    {
        $pajak = $this->jmlUang * 0.11;
        return "Pajak (11%): Rp " . number_format($pajak, 0, ',', '.');
    }
}
?>