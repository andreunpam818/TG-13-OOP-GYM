## Aturan Validasi

1.Nama anggota tidak boleh kosong.
2.Jenis kenaggotaan hanya boleh Basic, Standar, atau Premium.

Pengecekan dilakukkan oleh methot 'cekData()' dengan if else. Kalau ada aturan yang di langgar, data ditampilkan sebagai TIDAK VALID beserta alasan. Kalaiu dari satu aturan di langgar, di tampilkan alsan pertama saja.


## Skenario Pengujian
No | Data (nama, jenis, durasi) | Hasil |
==========================================
1. | Andi, Premium, 3 | Valid
2. | Budi, Basic, 1 | Valid |
3. | Kosong, Stamndar, 6 | Tidak Valid, Nama Kosong.
4. | Spasi, Basic, 2 | Tidak Valid, Jenis tidak ada.
5. | Citra, Gold, 3 | Tidak Valid, Jenis tidak ada |
6. | Dewi, Premium, 0 | Tidak valid, durasi kurang dari 1 |
7. | Eka, Standar, -2 | Tidak valid, Durasi kurang dari 1.
8. | Kosong , VIP, 0 | Tidak valid, nama kosong.


## Jawaban Pertanyaan

1. Apa fungsi class GymMembership? Class adalah cetakan untuk membuat object. dipakai untuk membuat data anggota gym
2. Apa fungsi constructor dalam aplikkasi ini ? Constructor langsung jalan sendiri waktu object dibuat pakai new. Fungsinya untuk mengisi data awal anggota.
3. Mengapa seluruh property menggunakan private ? supaya data tidak bisa di ubah sembarangan dari luar class. 
4. Mengapa data anggota diakseds memlalui gether method ? Karena property private tidak bisa dibaca langsung dari luar class. 
5.Apa yang terjadi jika durasi membership bernilai nol ? Nol lebih kecil dari 1, data akan menampilkan durasi kurang dari 1 bulan/
6. Mengapa jenis membership perlu divalidasi ? Karena gym hanya punya 3 jenis : Basci, Standar, dan premium . kalau tidak dicek orang bisa isi jenis lain seperti Gold dll.
7. Jelaskan alur program mulai dari pembuatan objek hingga informasi anggota ditampilkan?  
1. index.php dijalankan dan memanggil file class dengan require_once.
2. Dibuat 8 objek anggota dengan new GymMembership(...).
3. Constructor jalan otomatis dan menyimpan data ke properti private.
4. Fungsi tampilkan() memanggil cekData() untuk mengecek data dengan if else.
5. cekData()` mengembalikan tulisan "Valid" atau alasan kenapa data salah.
6. Kalau hasilnya "Valid", data ditampilkan memakai getter. Kalau bukan, yang ditampilkan adalah alasannya.
7. Hasilnya tampil di halaman web sebagai tulisan per anggota.
