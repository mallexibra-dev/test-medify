# Medify - Sistem Manajemen Master Items

Aplikasi berbasis Laravel untuk manajemen Master Items dan Kategori dengan fitur CRUD lengkap, filter, pencarian, dan export data.

## Fitur

### Master Items
- ✅ CRUD (Create, Read, Update, Delete) Master Items
- ✅ Filter berdasarkan Kode, Nama, dan range Harga
- ✅ Upload foto produk
- ✅ Relasi many-to-many dengan Kategori Items
- ✅ Export data ke Excel dengan format lengkap
- ✅ Tampilan detail item dengan kategori terkait

### Kategori Items
- ✅ CRUD Kategori Items
- ✅ Filter berdasarkan Kode dan Nama
- ✅ Relasi many-to-many dengan Master Items
- ✅ Tampilan detail kategori dengan daftar item terkait
- ✅ Export detail kategori ke PDF

## Teknologi

- **Framework**: Laravel 11
- **PHP**: 8.4
- **Database**: MySQL
- **Frontend**: Bootstrap 5
- **Package**:
  - `barryvdh/laravel-dompdf` - PDF generation
  - `maatwebsite/excel` - Excel export/import
  - `laravel-vite-plugin` - Asset compilation

## Instalasi

1. Clone repository
```bash
git clone <repository-url>
cd test-medify
```

2. Install dependencies
```bash
composer install
bun install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Setup database di `.env`
```
DB_DATABASE=medify
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. Run migrations
```bash
php artisan migrate
```

6. Link storage
```bash
php artisan storage:link
```

7. Build assets
```bash
bun run build
```

8. Seed data (opsional)
```bash
php artisan db:seed
```

9. Jalankan server
```bash
php artisan serve
```

## Struktur Database

### Tabel `master_items`
- `id` - Primary key
- `kode` - Kode unik item (auto-generated)
- `nama` - Nama item
- `jenis` - Jenis item (Obat, Alkes, Matkes, Umum, ATK)
- `harga_beli` - Harga beli
- `laba` - Persentase laba
- `supplier` - Nama supplier
- `photo` - Path foto produk
- `deleted_at` - Soft delete timestamp

### Tabel `kategori_items`
- `id` - Primary key
- `kode` - Kode unik kategori (auto-generated)
- `nama` - Nama kategori
- `deleted_at` - Soft delete timestamp

### Tabel Pivot `kategori_item_master_item`
- `id` - Primary key
- `kategori_item_id` - Foreign key ke kategori_items
- `master_item_id` - Foreign key ke master_items

## API Routes

### Master Items
- `GET /master-items` - Halaman daftar master items
- `GET /master-items/search` - API search & filter
- `GET /master-items/view/{kode}` - Detail item
- `GET /master-items/form/{method}/{id?}` - Form create/edit
- `POST /master-items/form/{method}/{id?}` - Submit form
- `GET /master-items/delete/{id}` - Hapus item
- `GET /master-items/export` - Download Excel

### Kategori Items
- `GET /category-items` - Halaman daftar kategori
- `GET /category-items/search` - API search & filter
- `GET /category-items/view/{kode}` - Detail kategori + PDF
- `GET /category-items/form/{method}/{id?}` - Form create/edit
- `POST /category-items/form/{method}/{id?}` - Submit form
- `GET /category-items/delete/{id}` - Hapus kategori
- `GET /category-items/print/{kode}` - Download PDF

## Format Export

### Excel (Master Items)
| Kolom | Deskripsi |
|-------|-----------|
| Kode | Kode item |
| Nama Kategori | Kategori (dipisah koma jika banyak) |
| Nama Items | Nama item |
| Nama Supplier | Supplier |
| Harga | Harga beli |
| Laba | Nominal laba (bukan persen) |
| Harga Jual | Harga beli + laba |

### PDF (Detail Kategori)
- Header: Nama & Kode Kategori
- Tabel: No, Kode Item, Nama Item, Jenis, Harga Beli, Laba (nominal), Supplier
- Footer: Tanggal & waktu cetak

## Author

Dibuat dleh Maulana Malik Ibrahim
