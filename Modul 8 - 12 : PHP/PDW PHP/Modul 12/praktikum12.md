# [cite_start]Modul Praktikum 12: PHP Database (OOP) [cite: 509, 510]

## [cite_start]Kemampuan Akhir dan Indikator [cite: 511, 514]
* [cite_start]**Kemampuan Akhir:** Memahami keterkaitan antar komponen PHP dan merancangnya menjadi sebuah aplikasi web untuk memecahkan suatu kasus pengelolaan informasi[cite: 512, 513].
* **Indikator:**
  * [cite_start]Mampu menjelaskan kemampuan PHP untuk memecahkan suatu kasus pengelolaan informasi[cite: 515].
  * [cite_start]Mampu mengaitkan elemen-elemen dan sintaks PHP untuk merancang sebuah aplikasi web[cite: 516].
  * [cite_start]Mampu memecahkan suatu kasus pengelolaan informasi menggunakan bahasa pemrograman PHP[cite: 517].

## [cite_start]Petunjuk Praktikum [cite: 518]
[cite_start]Praktikum ini difokuskan pada penggunaan pendekatan *Object-Oriented Programming* (OOP) dalam melakukan koneksi ke dalam database[cite: 519].

---

### [cite_start]1. Persiapan Database dan Tabel [cite: 520]
[cite_start]Gunakan basis data dari praktik sebelumnya dan pastikan tabel-tabel berikut telah dibuat[cite: 519, 520]:

* [cite_start]**`t_dosen`**: Memiliki field `idDosen` (Integer, Primary key, auto increment), `namaDosen` (Varchar 50), dan `noHP` (Varchar 25)[cite: 521, 522, 523].
* **`t_mahasiswa`**: Memiliki field `npm` (Integer, Primary key), `namaMhs` (Varchar 50), `prodi` (Varchar 25), `alamat` (Varchar 70), dan `noHP` (Varchar 25)[cite: 524, 525].
* **`t_matakuliah`**: Memiliki field `kodeMK` (Integer, Primary key), `namaMK` (Varchar 70), `sks` (Integer), dan `jam` (Integer)[cite: 526, 527, 529].

---

### [cite_start]2. Membuat Koneksi (`koneksi.php`) [cite: 530, 532]
[cite_start]Koneksi PHP dengan database disesuaikan dengan server yang digunakan, dan ditulis menggunakan gaya OOP `mysqli`[cite: 531, 534].

```php
<?php
$con = new mysqli("localhost", "root", "", "db_praktik");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>