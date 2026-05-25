<?php
class Koneksi_db 
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "db_kampus"; // Sesuaikan dengan nama DB Anda
    private $con = false;

    public function connect() 
    {
        if (!$this->con) {
            $this->con = new mysqli($this->host, $this->user, $this->password, $this->database);
            
            if ($this->con->connect_error) {
                return false; // Koneksi gagal
            } else {
                return true; // Koneksi berhasil
            }
        }
        return true; // Sudah terkoneksi sebelumnya
    }
}
?>