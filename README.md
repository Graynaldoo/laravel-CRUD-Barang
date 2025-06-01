# Laravel CRUD Barang

Aplikasi CRUD sederhana berbasis web menggunakan **Laravel** dan **Bootstrap** untuk mengelola data barang. Proyek ini mendemonstrasikan fitur Create, Read, Update, dan Delete dengan dukungan upload foto.

## 📦 Fitur

- ✅ Tambah barang baru
- 📃 Lihat daftar barang
- ✏️ Edit data barang
- 🗑️ Hapus barang
- 🖼️ Upload & tampilkan foto barang
- 🎨 Tampilan responsif dengan Bootstrap

## 🗃️ Struktur Tabel Barang

| Kolom        | Tipe Data | Keterangan               |
|--------------|-----------|--------------------------|
| `id`         | int       | Primary key, auto-increment |
| `kode`       | string    | Kode unik barang         |
| `nama_barang`| string    | Nama barang              |
| `deskripsi`  | text      | Deskripsi barang         |
| `harga_satuan`| integer  | Harga satuan             |
| `jumlah`     | integer   | Stok/jumlah barang       |
| `foto`       | string    | Nama file foto (path)    |

## ⚙️ Cara Menjalankan Proyek

1. **Clone Repository**

   ```bash
   git clone https://github.com/Graynaldoo/laravel-crud-barang.git
   cd laravel-crud-barang
   ```

2. **Install Dependency**

   ```bash
   composer install
   ```

3. **Copy File `.env` dan Generate Key**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Atur Konfigurasi Database di `.env`**

   Sesuaikan `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD`

5. **Migrasi Database**

   ```bash
   php artisan migrate
   ```

6. **Jalankan Server**

   ```bash
   php artisan serve
   ```

7. **Akses di Browser**

   [http://127.0.0.1:8000/barang](http://127.0.0.1:8000/barang)

## 📸 Tampilan

Beranda (daftar barang) dan form tambah/edit menggunakan Bootstrap yang responsif.

---

> Dibuat dengan ❤️ oleh Graynaldoo
