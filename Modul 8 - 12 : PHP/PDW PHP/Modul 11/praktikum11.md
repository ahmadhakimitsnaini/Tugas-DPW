# [cite_start]Modul Praktikum 11: PHP Database (CRUD) [cite: 88]

## Kemampuan Akhir dan Indikator
* [cite_start]**Kemampuan Akhir:** Memahami keterkaitan antar komponen PHP dan merancangnya menjadi sebuah aplikasi web untuk memecahkan suatu kasus pengelolaan informasi[cite: 90, 91].
* [cite_start]**Indikator:** Mampu memecahkan suatu kasus pengelolaan informasi menggunakan bahasa pemrograman PHP[cite: 95].

## Petunjuk Umum
[cite_start]Praktikum ini difokuskan pada pembuatan sistem informasi sederhana yang mencakup fungsi-fungsi dasar pengelolaan data (CRUD: *Create, Read, Update, Delete*) menggunakan PHP dan MySQL yang telah dibuat pada praktikum sebelumnya[cite: 97, 98].

---

## 1. Persiapan Database
[cite_start]Buat database pada MySQL dan siapkan tabel-tabel berikut: [cite: 99]

### [cite_start]Tabel `t_dosen` [cite: 100]
* [cite_start]`idDosen` (Integer) - *Primary key, auto increment* [cite: 100, 101, 102]
* [cite_start]`namaDosen` (Varchar 50) [cite: 100, 102]
* [cite_start]`noHP` (Varchar 25) [cite: 100, 102]

### [cite_start]Tabel `t_mahasiswa` [cite: 103]
* [cite_start]`npm` (Integer) - *Primary key* [cite: 104]
* [cite_start]`namaMhs` (Varchar 50) [cite: 104]
* [cite_start]`prodi` (Varchar 25) [cite: 104]
* [cite_start]`alamat` (Varchar 70) [cite: 104]
* [cite_start]`noHP` (Varchar 25) [cite: 104]

### [cite_start]Tabel `t_matakuliah` [cite: 105]
* [cite_start]`kodeMK` (Integer) - *Primary key* [cite: 108]
* [cite_start]`namaMK` (Varchar 70) [cite: 108]
* [cite_start]`sks` (Integer) [cite: 108]
* [cite_start]`jam` (Integer) [cite: 108]

---

## [cite_start]2. Membuat Koneksi (`koneksi.php`) [cite: 109, 111]
[cite_start]Menggunakan `mysqli_connect` untuk mengkoneksikan PHP dengan database MySQL[cite: 109, 110, 134]. 
[cite_start]Koneksi memerlukan variabel `$host`, `$user`, `$paswd`, dan `$name`[cite: 116, 118, 120, 123].

## [cite_start]3. CREATE / Tambah Data (`input.php` & `proses_inputdosen.php`) [cite: 140, 215, 218]
* [cite_start]**`input.php`:** Berisi form HTML untuk mengisi record data baru (Nama Dosen dan No HP)[cite: 141, 142].
* [cite_start]**`proses_inputdosen.php`:** Memproses data dari form HTML untuk disimpan ke tabel `t_dosen` menggunakan fungsi `mysqli_query`[cite: 215, 216]. 
* Menjalankan query SQL: `INSERT INTO t_dosen VALUES (NULL, '$namaDosen', '$noHP')`[cite: 234, 236].
* [cite_start]Melakukan *redirect* ke halaman `viewdosen.php` menggunakan `header("location:viewdosen.php")` setelah query berhasil[cite: 253, 255].

## [cite_start]4. READ / Tampil Data (`viewdosen.php`) [cite: 258, 260]
* Melihat dan menampilkan semua record dari tabel `t_dosen` menggunakan tabel HTML[cite: 259].
* [cite_start]Menjalankan query SQL: `SELECT * FROM t_dosen ORDER BY idDosen ASC`[cite: 314, 315].
* Hasil query disimpan dalam array lalu dicetak menggunakan perulangan `while` dengan `mysqli_fetch_assoc`[cite: 330, 332, 334].
* [cite_start]Data yang ditampilkan memiliki *link* tambahan untuk mengedit dan menghapus data berdasarkan ID[cite: 353, 355, 356].

## [cite_start]5. UPDATE / Ubah Data (`editdosen.php` & `proses_editdosen.php`) [cite: 372, 373, 502, 504]
* [cite_start]**`editdosen.php`:** Mengecek nilai metode GET `idDosen` pada URL, lalu menampilkan form HTML berisi data lama dosen yang akan diedit[cite: 372, 402, 403].
* **`proses_editdosen.php`:** Menjalankan query UPDATE berdasarkan data dari form: `UPDATE t_dosen SET namaDosen='$namaDosen', noHP='$noHP' WHERE idDosen='$id'`[cite: 516, 524, 530].
* [cite_start]Melakukan *redirect* kembali ke `viewdosen.php` setelah update[cite: 542, 544].

## [cite_start]6. DELETE / Hapus Data (`hapusdosen.php`) [cite: 548, 549]
* [cite_start]Menangkap `idDosen` dari URL menggunakan metode GET untuk menentukan data yang akan dihapus[cite: 549, 557].
* Menjalankan query DELETE: `DELETE FROM t_dosen WHERE idDosen = '$id'`[cite: 566, 568].
* [cite_start]Melakukan *redirect* kembali ke `viewdosen.php` setelah data terhapus[cite: 584, 586].

---

## [cite_start]7. Studi Kasus (Tugas Praktikum) [cite: 589]
1. [cite_start]Buat web sederhana berisi aplikasi CRUD untuk tabel `t_mahasiswa` dan `t_matakuliah`[cite: 590].
2. [cite_start]Desain tampilan bebas dan dapat dihias sebaik mungkin menggunakan CSS[cite: 591].
3. [cite_start]Tambahkan **fitur pencarian** terhadap data dosen, mahasiswa, dan matakuliah menggunakan *keyword* nama[cite: 592].
4. [cite_start]Praktikum dikumpulkan berupa dokumen Word yang berisi snapshot (tangkapan layar) hasil antarmuka pengelolaan CRUD[cite: 593].