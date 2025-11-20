# WebBasedSuperMarketInformationSystem
WebBasedSuperMarketInformationSystem adalah project web yang dikembangkan sebagai pengganti program magang selama masa pandemi COVID-19. Project ini merupakan bagian dari program studi S1 Teknik Informatika di Universitas Katolik Soegijapranata Semarang.

# 🛒 Sistem Informasi Supermarket  
Proyek Workshop – Universitas Katolik Soegijapranata  
Oleh:  
- **Andre Dwiyanto Cahyono – 18.K1.0002**  
- **Daniel Adrian Rahardjo – 19.K1.0054**

---

## 📌 Deskripsi Proyek  
Sistem Informasi Supermarket ini dikembangkan sebagai bagian dari kegiatan workshop yang bertujuan untuk membangun aplikasi yang mampu mengelola proses transaksi penjualan, pencatatan stok barang, pengelolaan staf, serta proses re-supply barang kepada pemasok.  
Sistem dibangun menggunakan bahasa pemrograman **PHP** dan database **MySQL**, dilengkapi dengan beberapa role user seperti **Admin**, **Staf**, dan **Manager**.

Aplikasi ini mempermudah proses operasional supermarket, mulai dari pencatatan transaksi kasir, pengecekan stok, pencatatan barang masuk (re-supply), hingga laporan penjualan berdasarkan tanggal atau bulan tertentu.

---

## 🎯 Tujuan Sistem
- Mengelola proses transaksi penjualan di kasir.  
- Menginput dan memonitor transaksi barang masuk (re-supply).  
- Melihat laporan penjualan dan pengeluaran.  
- Menampilkan data staf, stok barang, dan seluruh aktivitas terkait operasional supermarket.  
- Menyediakan fitur multi-user dengan role dan hak akses berbeda.

---

## 🚀 Fitur Utama
### **👤 Role Staf**
- Melakukan transaksi penjualan melalui menu *Casheer*.  
- Menambah, menghapus, dan melihat isi keranjang belanja.  
- Memproses re-supply dengan melakukan pengecekan status barang.

### **📦 Role Manager**
- Melihat data staf dan seluruh transaksi supermarket.  
- Melihat stok barang secara detail.  
- Melakukan *Re-Supply Request* ke supplier.  
- Melihat laporan penjualan berdasarkan:
  - Tanggal tertentu
  - Bulan tertentu
  - Detail barang yang terjual
  - Waktu barang terjual

### **🛠 Role Admin**
- Dapat melakukan semua tugas staf.  
- Mengelola transaksi di kasir dan re-supply.
- Mengakses menu *View* untuk melihat laporan pemasukan, pengeluaran, detail re-stock, dan stok barang.

---

## 📂 Struktur Sistem
Berikut struktur file utama dari aplikasi:

root/
│── ng.php # Halaman login
│── mulek.php # Validasi login
│── Admin1.php # Menu Casheer untuk Admin
│── Admin2.php # Menu Re-Supply Admin
│── Admin3.php # Menu View Admin
│── MANAGER.php # Menu Manager
│── mulek1.php # Menu Casheer Staf
│── connect.php # Koneksi database
│── assets/ # CSS, JS, Bootstrap, dll.
│── database.sql # Struktur database (opsional)


---

## 🗄 Database Utama
Sistem menggunakan beberapa tabel inti:
- **staf**  
- **barang**  
- **supplyer**  
- **detail_restock**  
- **keranjang**  
- **detail_transaksi**  
- **transaksi**

Setiap tabel mempunyai relasi untuk mendukung proses transaksi masuk & keluar, manajemen stok, hingga laporan.

---

## 🧩 Alur Sistem (Flow Overview)
1. **User melakukan login** dan diarahkan berdasarkan role.  
2. **Staf/Admin** mengakses menu kasir atau menu re-supply.  
3. **Manager/Admin** mengelola stok, laporan pemasukan, dan pengeluaran.  
4. Sistem menyimpan seluruh transaksi pada database.  
5. Manager dapat menarik laporan transaksi berdasarkan periode tertentu.  

---

## 🔧 Teknologi yang Digunakan
- **PHP (Native)**  
- **MySQL Database**  
- **Bootstrap** (untuk tampilan UI)  
- **jQuery + AJAX**  
- **DataTables** (untuk tabel dinamis)  

---

## 🏁 Cara Instalasi
1. Clone repository ini:
   ```bash
   git clone https://github.com/username/repository-supermarket.git
2. Pindahkan project ke folder htdocs (jika memakai XAMPP) atau folder server lainnya.

3. Import database:
   > Buka phpMyAdmin
   > Buat database baru
   > Import file database.sql

4. Sesuaikan konfigurasi koneksi pada file:
connect.php

5. Jalankan sistem lewat browser:
http://localhost/supermarket/

📊 Hak Akses & Login

Role pengguna dibedakan berdasarkan ID:

STxxxx → Staf
MGxxxx → Manager
ADxxxx → Admin

Sistem menentukan halaman awal berdasarkan prefix ID tersebut.

📎 Dokumentasi

Seluruh tahapan workshop meliputi:
Feasibility Study
Requirement Analysis
Spesifikasi
Desain Database
Desain Program
Coding & Testing
Integrasi & Pengujian Sistem
Maintenance

Dokumen lengkap terdapat pada file laporan PDF.

🤝 Kontribusi

Pull request sangat diterima untuk pengembangan lebih lanjut.
Silakan buat issue baru jika menemukan bug atau ingin menambahkan fitur.
