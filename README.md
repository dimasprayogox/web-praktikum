# Proyek Laravel dan Tailwind CSS

## Deskripsi Proyek
Proyek ini adalah aplikasi web yang dibangun menggunakan **Laravel**, sebuah framework PHP yang powerful untuk pengembangan aplikasi berbasis web, dan **Tailwind CSS**, sebuah framework CSS utility-first untuk mendesain antarmuka pengguna yang modern dan responsif.  
Proyek ini dirancang untuk mempermudah pengembangan aplikasi dengan struktur yang rapi, performa tinggi, dan pengalaman pengguna yang optimal.

---

## Cara Instalasi dan Penggunaan

### Prasyarat
Sebelum memulai instalasi, pastikan Anda telah menginstal:
- **PHP** (minimal versi 8.1)
- **Composer** (dependency manager untuk PHP)
- **Node.js** dan **npm** (untuk pengelolaan paket front-end)
- **MySQL** atau database lainnya yang didukung Laravel

### Langkah Instalasi
1. **Clone Repository**
   ```bash
   git clone <URL_REPOSITORY>
   cd <NAMA_FOLDER>
   ```

2. **Install Dependensi Backend**
   ```bash
   composer install
   ```

3. **Install Dependensi Frontend**
   ```bash
   npm install
   ```

4. **Konfigurasi File `.env`**
   - Duplikat file `.env.example` dan ubah nama menjadi `.env`.
   - Konfigurasi detail database:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=nama_database
     DB_USERNAME=username
     DB_PASSWORD=password
     ```

5. **Generate App Key**
   ```bash
   php artisan key:generate
   ```

6. **Migrasi Database**
   Jalankan migrasi untuk membuat tabel-tabel yang dibutuhkan:
   ```bash
   php artisan migrate
   ```

7. **Jalankan Build Assets**
   Untuk mem-build CSS dan JavaScript menggunakan Tailwind:
   ```bash
   npm run dev
   ```
   Untuk produksi:
   ```bash
   npm run build
   ```

8. **Menjalankan Server**
   Jalankan aplikasi menggunakan built-in server Laravel:
   ```bash
   php artisan serve
   ```
   Akses aplikasi di [http://127.0.0.1:8000](http://127.0.0.1:8000).

---

## Struktur File Proyek
Berikut adalah struktur file utama dalam proyek ini:

```
├── app/                 # Logika backend (Controllers, Models, dll.)
├── bootstrap/           # File bootstrap aplikasi
├── config/              # Konfigurasi aplikasi
├── database/            # File migrasi dan seeder
├── public/              # Entry point aplikasi dan file publik
│   ├── css/             # File CSS (output dari Tailwind)
│   ├── js/              # File JavaScript (output dari build)
│   └── index.php        # Entry point utama
├── resources/           # File view, komponen, dan aset sumber
│   ├── views/           # Blade templates
│   ├── css/             # File Tailwind (sumber)
│   └── js/              # Script JavaScript (sumber)
├── routes/              # File routing aplikasi
│   ├── web.php          # Routing untuk aplikasi web
│   └── api.php          # Routing untuk API
├── storage/             # Cache, logs, dan file yang di-generate
├── tests/               # File testing
├── vendor/              # Dependensi dari Composer
├── package.json         # Konfigurasi npm
├── tailwind.config.js   # Konfigurasi Tailwind CSS
├── webpack.mix.js       # Konfigurasi build asset (jika menggunakan Laravel Mix)
└── .env                 # File konfigurasi lingkungan (environment)
```

---

Semoga README ini membantu dalam instalasi dan penggunaan proyek Anda! 🎉
