# PHP Todo List Sederhana

Dokumen ini menjelaskan cara menjalankan dan mengembangkan aplikasi **Todo List** yang ada di repository ZIP yang kamu bagikan.

## Fitur
- Tambah, lihat, edit, hapus task (CRUD)
- Tandai selesai/belum selesai
- Penyimpanan: Penyimpanan berbasis session/array

## Cara Menjalankan (Lokal)
1. Pastikan PHP 8.0+ sudah terpasang.
2. Masuk ke folder proyek ini.
3. Jalankan server pengembangan:
```bash
php -S localhost:8000 -t .
```
4. Akses aplikasi melalui browser:
   - Buka http://localhost:8000 di browser dan arahkan ke file `index.php`.

> **Catatan:** Jika kamu menggunakan XAMPP/MAMP/Laragon, letakkan folder proyek di `htdocs`/`www` lalu akses sesuai virtual host.

## ⚙Konfigurasi
- Sesuaikan kredensial database atau path file data di file konfigurasi/berkas PHP terkait (lihat bagian kode).
- File penting untuk dicek:
  - Entry point: `index.php (atau file utama lain)`
  - CSS: -
  - JS: -
  - Data: -


## Daftar File PHP Utama
Beberapa file aksi/halaman terdeteksi: AddTodoList, App, Input, RemoveTodoList, ShowTodoList, TestAddTodoList, TestInput, TestRemoveTodoList, TestShowTodoList, TestViewAddTodoList, TestViewRemoveTodoList, TestViewShowTodoList, TodoList, ViewAddTodoList, ViewRemoveTodoList, ViewShowTodoList

## Pengujian (opsional)
- Uji manual alur tambah → lihat → tandai selesai → edit → hapus.
- Jika menggunakan penyimpanan file JSON, uji konkurensi (race condition) dengan beberapa request bersamaan.

---
_Digenerasikan otomatis berdasarkan struktur ZIP yang kamu unggah._
