<?php
class Database {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "root";
    private $database = "modul_database_php";
    public $con;

    // Method yang otomatis berjalan saat object dibuat
    public function __construct() {
        $this->con = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }

    // Method untuk menutup koneksi (bisa dipanggil di akhir proses)
    public function closeConnection() {
        if ($this->con) {
            $this->con->close();
        }
    }
}
?>