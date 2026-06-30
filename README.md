# 🎓 APBO-Learnify
Sistem Manajemen Pembelajaran Jarak Jauh (E-Learning) berbasis Web yang dikembangkan menggunakan Framework CodeIgniter 3. Platform ini dirancang untuk memudahkan interaksi antara Siswa, Guru, dan Admin dalam kegiatan belajar mengajar secara online.

## ✨ Fitur Utama
* **👥 Multi-Role Access**: Terdiri dari 3 level pengguna, yaitu **Admin**, **Guru**, dan **Siswa**.
* **📚 Manajemen Materi Video**: Guru dapat dengan mudah mengunggah (upload), mengedit, dan menghapus video pembelajaran (format mp4/mkv).
* **📊 Manajemen Nilai**: Sistem penilaian siswa yang dapat diinput, diedit, dan dikelola langsung oleh Guru sesuai mata pelajaran.
* **🏫 Pengelolaan Kelas & Absensi**: Mendukung data pengelompokan kelas dan absensi harian.
* **👨‍💻 Dashboard Admin**: Kemudahan untuk memonitor dan mengatur akun seluruh pengguna.

## 💻 Teknologi yang Digunakan
* **Backend**: PHP (Framework CodeIgniter 3.1.11)
* **Frontend**: HTML5, CSS3, JavaScript
* **Database**: MySQL
* **Web Server**: Apache (XAMPP/WAMP/MAMP)

## 🚀 Cara Instalasi di Localhost
1. Pastikan Anda sudah menginstal **XAMPP** atau software web server sejenis, dan nyalakan modul **Apache** serta **MySQL**.
2. **Clone repositori** ini ke dalam folder `htdocs` (jika menggunakan XAMPP):
   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/asrofisemet/APBO-Learnify.git
   ```
3. Ubah nama folder hasil clone menjadi `Website-E-Learning-master` (jika diperlukan) agar URL sesuai dengan setting bawaan.
4. Buka **phpMyAdmin** (`http://localhost/phpmyadmin`).
5. Buat sebuah database baru dengan nama persis: **`learnify`**.
6. Pilih database tersebut, klik tab **Import**, lalu masukkan file `learnify.sql` yang ada di dalam folder `database/` di proyek ini.
7. Aplikasi siap dijalankan! Buka browser Anda dan akses:
   ```text
   http://localhost/Website-E-Learning-master/
   ```

## 🔒 Konfigurasi Tambahan
Jika Anda mengubah nama folder proyek, pastikan untuk menyesuaikan `base_url` di dalam file:
`application/config/config.php` pada baris sekitar ke-26.

---
Dikembangkan dengan ❤️ untuk kemajuan pendidikan.
