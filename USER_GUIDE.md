# 📖 Panduan Pengguna E-Katalog Kantin
## Petunjuk Lengkap untuk Pengguna Awam

---

## 🎯 Apa itu E-Katalog Kantin?

**E-Katalog Kantin** adalah aplikasi web yang memudahkan Anda untuk:
- 📋 Melihat daftar produk yang tersedia di kantin
- ➕ Menambahkan produk baru
- ✏️ Mengubah informasi produk
- 🗑️ Menghapus produk yang tidak ada lagi
- 🖼️ Mengunggah foto/gambar produk
- 🔍 Mencari produk berdasarkan kategori

**Siapa yang bisa pakai aplikasi ini?**
- Pemilik kantin
- Karyawan kantin
- Admin sistem kantin

---

## 🚀 Cara Memulai (Setup Awal)

### **Untuk Pengguna Windows:**

#### Langkah 1️⃣ - Persiapan Database
1. Buka folder project E-Katalog Kantin
2. Cari file bernama **`setup_database.bat`** (warna terang, ikon gigi ⚙️)
3. **Double-click** file tersebut
4. Tunggu jendela hitam tertutup otomatis (sekitar 5-10 detik)
5. ✅ Database sudah siap!

#### Langkah 2️⃣ - Jalankan Server
1. Cari file **`start_server.bat`**
2. **Double-click** untuk menjalankan
3. Anda akan lihat jendela hitam dengan tulisan seperti ini:
   ```
   Server running at http://localhost:8000
   ```
4. **Jangan tutup jendela ini!** Biarkan terbuka saat menggunakan aplikasi

#### Langkah 3️⃣ - Buka Aplikasi
1. Cari folder **`frontend`**
2. Buka file **`index.html`** (ikon browser)
3. **Double-click** untuk membuka di browser
4. Jika browser tidak terbuka, buka browser (Chrome, Firefox, Edge) secara manual
5. Ketik di address bar: **`frontend/index.html`** atau buka file secara langsung

✅ **Selesai! Aplikasi sudah siap digunakan.**

---

### **Untuk Pengguna Linux/Mac:**

#### Langkah 1️⃣ - Buka Terminal
1. Buka aplikasi Terminal
2. Navigasi ke folder project:
   ```bash
   cd /path/to/E-katalog
   ```

#### Langkah 2️⃣ - Setup Database
```bash
php backend/init_db.php
```

#### Langkah 3️⃣ - Jalankan Server
```bash
cd backend
php -S localhost:8000
```

#### Langkah 4️⃣ - Buka Aplikasi
1. Buka browser
2. Buka file `frontend/index.html`

✅ **Selesai!**

---

## 💡 Cara Menggunakan Aplikasi

### **1. Halaman Utama - Lihat Daftar Produk**

#### Apa yang Anda lihat?

```
┌─────────────────────────────────────────┐
│  E-Katalog Kantin                       │
├─────────────────────────────────────────┤
│ [Semua Kategori] [Makanan] [Minuman]   │
├─────────────────────────────────────────┤
│                                          │
│  ┌──────────┐  ┌──────────┐              │
│  │ Nasi     │  │ Mie      │              │
│  │ Goreng   │  │ Rebus    │              │
│  │ Rp.15000 │  │ Rp.12000 │              │
│  │[Edit]    │  │[Edit]    │              │
│  │[Hapus]   │  │[Hapus]   │              │
│  └──────────┘  └──────────┘              │
│                                          │
│              [➕ Tambah Produk]          │
└─────────────────────────────────────────┘
```

#### Yang bisa Anda lakukan:

**A. Filter Berdasarkan Kategori**
- Klik tombol kategori di bagian atas:
  - **"Semua Kategori"** = Lihat semua produk
  - **"Makanan"** = Hanya produk makanan
  - **"Minuman"** = Hanya produk minuman
  - **"Snack"** = Hanya produk snack

**B. Lihat Detail Produk**
- Setiap produk ditampilkan dalam bentuk kartu dengan:
  - 🖼️ Foto/gambar produk
  - 📝 Nama produk
  - 💰 Harga
  - 📊 Stok yang tersedia
  - 📄 Deskripsi singkat

**C. Scroll ke Bawah**
- Geser mouse ke bawah untuk melihat lebih banyak produk

---

### **2. Menambah Produk Baru**

#### Langkah-langkah:

**Step 1️⃣ - Klik Tombol "Tambah Produk"**
- Cari tombol hijau bertuliskan **"➕ Tambah Produk"** atau **"Add Produk"**
- Klik tombol tersebut
- Anda akan diarahkan ke halaman form

**Step 2️⃣ - Isi Formulir**

Formulir akan menanyakan:

| Field | Contoh | Cara Isi |
|-------|--------|----------|
| **Nama Produk** | Nasi Goreng | Ketik nama produk |
| **Harga** | 15000 | Ketik angka saja (tanpa Rp. atau titik) |
| **Stok** | 20 | Ketik jumlah stok |
| **Kategori** | Makanan | Pilih dari dropdown |
| **Deskripsi** | Nasi goreng spesial dengan telur | Ketik penjelasan produk |
| **Gambar** | nasi.jpg | Klik tombol "Pilih Gambar" atau ambil foto |

**Contoh pengisian:**
```
Nama Produk: [Nasi Goreng Spesial        ]
Harga:       [15000                       ]
Stok:        [20                          ]
Kategori:    [Makanan                   ▼]
Deskripsi:   [Nasi putih goreng dengan   ]
             [telur, sayur, dan sambal   ]
Gambar:      [📷 Pilih Gambar]
```

**Step 3️⃣ - Unggah Gambar (Opsional)**

- Klik tombol **"Pilih Gambar"** atau **"📷 Upload"**
- Anda bisa:
  - **Pilih file dari komputer**: Klik "Browse" → cari gambar → OK
  - **Ambil foto dengan kamera**: Klik "📷 Kamera" (jika perangkat mendukung)
- Gambar harus format: **JPG, PNG, atau GIF**
- Ukuran maksimal: **5 MB** (biasanya)

**Step 4️⃣ - Klik Tombol "Simpan"**
- Cari tombol **"Simpan"**, **"Submit"**, atau **"Tambah"** (biasanya warna hijau)
- Klik tombol tersebut
- Tunggu sebentar...
- ✅ Produk berhasil ditambah! Anda akan kembali ke halaman utama

**Notifikasi Sukses:**
```
✅ Produk berhasil ditambahkan!
```

---

### **3. Mengubah/Edit Produk**

#### Langkah-langkah:

**Step 1️⃣ - Cari Produk yang Ingin Diubah**
- Scrolling di halaman utama untuk menemukan produk
- Atau filter kategori dulu

**Step 2️⃣ - Klik Tombol "Edit"**
- Setiap kartu produk memiliki tombol **"Edit"** atau **"✏️"**
- Klik tombol tersebut
- Anda akan dialihkan ke halaman edit

**Step 3️⃣ - Ubah Data yang Diinginkan**
- Form akan terisi otomatis dengan data lama
- Ubah field yang perlu diubah:
  - Nama produk (nama baru)
  - Harga (harga baru)
  - Stok (jumlah baru)
  - Kategori (kategori baru)
  - Deskripsi (penjelasan baru)
  - Gambar (gambar baru, opsional)

**Contoh perubahan:**
```
Nama Produk: [Nasi Goreng Istimewa      ] ← Mengubah dari "Spesial" ke "Istimewa"
Harga:       [16000                      ] ← Mengubah dari 15000 ke 16000
```

**Step 4️⃣ - Klik Tombol "Simpan"**
- Cari tombol **"Simpan"** atau **"Update"** (biasanya warna biru)
- Klik tombol tersebut
- Tunggu sebentar...
- ✅ Produk berhasil diubah!

---

### **4. Menghapus Produk**

#### Langkah-langkah:

**Step 1️⃣ - Cari Produk yang Ingin Dihapus**
- Scrolling atau filter untuk menemukan produk

**Step 2️⃣ - Klik Tombol "Hapus"**
- Setiap kartu produk memiliki tombol **"Hapus"** atau **"🗑️"** (biasanya warna merah)
- Klik tombol tersebut

**Step 3️⃣ - Konfirmasi Penghapusan**
- Aplikasi akan menanyakan: **"Yakin ingin menghapus produk ini?"**
- Klik **"Ya"** atau **"OK"** untuk menghapus
- Atau klik **"Tidak"** / **"Cancel"** untuk membatalkan

**Step 4️⃣ - Selesai**
- ✅ Produk berhasil dihapus
- Produk tidak akan muncul di daftar lagi

⚠️ **Perhatian:** Penghapusan tidak bisa dibatalkan! Pastikan Anda yakin sebelum menghapus.

---

## 🎨 Memahami Interface/Tampilan

### **Tombol-Tombol Penting**

| Tombol | Warna | Fungsi |
|--------|-------|--------|
| ➕ Tambah Produk | Hijau | Menambah produk baru |
| ✏️ Edit | Biru | Mengubah data produk |
| 🗑️ Hapus | Merah | Menghapus produk |
| 📷 Pilih Gambar | Abu-abu | Upload gambar |
| Simpan/Submit | Hijau | Menyimpan data |

### **Kategori Produk**

Produk dkelompokkan menjadi 3 kategori:

| Kategori | Contoh |
|----------|--------|
| 🍚 **Makanan** | Nasi Goreng, Mie, Roti, Telur |
| 🥤 **Minuman** | Teh, Kopi, Jus, Soft Drink |
| 🍪 **Snack** | Keripik, Kue, Cokelat, Permen |

---

## ⚠️ Troubleshooting (Jika Ada Masalah)

### **Masalah 1: Aplikasi Tidak Terbuka**

❌ **Masalah:** Klik `index.html` tapi tidak ada yang terjadi

✅ **Solusi:**
1. Buka browser (Chrome, Firefox, Edge)
2. Tekan `Ctrl + O` (atau `Cmd + O` di Mac)
3. Cari file `frontend/index.html`
4. Klik "Open"

---

### **Masalah 2: "Server tidak terhubung" atau "Koneksi ditolak"**

❌ **Masalah:** Halaman menunjukkan error "Tidak bisa terhubung ke server"

✅ **Solusi:**
1. Pastikan **`start_server.bat`** sudah dijalankan
2. Cek jendela hitam server masih terbuka
3. Lihat apakah ada tulisan `Server running at http://localhost:8000`
4. Jika tidak ada, tutup jendela dan jalankan ulang `start_server.bat`

---

### **Masalah 3: Tombol "Tambah Produk" Tidak Berfungsi**

❌ **Masalah:** Klik tombol tapi tidak ada yang terjadi

✅ **Solusi:**
1. Refresh halaman (tekan `F5` atau `Ctrl + R`)
2. Pastikan JavaScript aktif di browser (biasanya sudah aktif)
3. Coba browser lain (Chrome, Firefox)
4. Pastikan server masih berjalan

---

### **Masalah 4: Gambar Tidak Muncul**

❌ **Masalah:** Upload gambar berhasil tapi gambar tidak terlihat

✅ **Solusi:**
1. Pastikan file adalah gambar (JPG, PNG, GIF)
2. Ukuran file tidak terlalu besar (di bawah 5 MB)
3. Refresh halaman untuk melihat gambar terbaru
4. Coba upload gambar lagi

---

### **Masalah 5: "Database Error"**

❌ **Masalah:** Muncul pesan error terkait database

✅ **Solusi (Windows):**
1. Tutup aplikasi dan server
2. Hapus folder **`data`** (jika ada)
3. Jalankan **`setup_database.bat`** lagi
4. Jalankan **`start_server.bat`**
5. Buka `frontend/index.html` lagi

✅ **Solusi (Linux/Mac):**
1. Hapus file `data/e_katalog.db`
2. Jalankan `php backend/init_db.php`
3. Jalankan `php -S localhost:8000` lagi

---

### **Masalah 6: Port 8000 Sudah Digunakan**

❌ **Masalah:** Muncul pesan "Port 8000 already in use" atau "Alamat sudah dipakai"

✅ **Solusi:**
1. Cari aplikasi lain yang memakai port 8000 dan tutup
2. Atau ganti port di file `start_server.bat`:
   - Edit `start_server.bat` dengan Notepad
   - Ubah `php -S localhost:8000` menjadi `php -S localhost:8080`
   - Simpan file
   - Jalankan lagi
3. Update juga di `frontend/js/api.js`:
   - Buka file dengan Notepad
   - Cari `const API_BASE = 'http://localhost:8000'`
   - Ubah menjadi `const API_BASE = 'http://localhost:8080'`
   - Simpan file

---

## 💾 Tips & Trik

### **Tips 1: Format Harga**
- Ketik harga tanpa simbol Rp atau titik separator
- ❌ Salah: `Rp.15.000` atau `15.000`
- ✅ Benar: `15000`

### **Tips 2: Nama Produk yang Baik**
- Gunakan nama yang jelas dan ringkas
- ❌ Kurang baik: "Makanan"
- ✅ Baik: "Nasi Goreng Spesial"

### **Tips 3: Deskripsi Produk**
- Tuliskan informasi penting:
  - Bahan utama
  - Porsi/ukuran
  - Sambal/bumbu khusus
  - Alergen (jika ada)

**Contoh:**
```
Nasi goreng spesial dengan telur dadar, 
sayur, kacang, dan sedikit sambal. 
1 porsi (200g). Mengandung kacang.
```

### **Tips 4: Gambar Produk**
- Gunakan gambar berkualitas baik
- Foto produk dari berbagai sudut
- Pastikan pencahayaan cukup
- Ukuran gambar tidak perlu terlalu besar

### **Tips 5: Backup Data**
- Secara berkala, copy folder `data/` ke tempat lain
- Ini untuk menjaga data tidak hilang jika ada masalah

### **Tips 6: Kategori**
- Kelompokkan produk dengan benar:
  - Makanan = hidangan berat
  - Minuman = segala jenis minuman
  - Snack = makanan ringan

---

## 📱 Akses dari Smartphone/Tablet

Aplikasi ini bisa diakses dari perangkat lain!

### **Cara Akses dari Smartphone/Tablet:**

1. **Perangkat harus terhubung ke jaringan yang sama** (Wi-Fi yang sama)

2. **Cari IP Address komputer:**
   - Windows: Buka Command Prompt, ketik `ipconfig`, cari "IPv4 Address" (contoh: `192.168.1.100`)
   - Mac/Linux: Buka Terminal, ketik `ifconfig`

3. **Di smartphone, buka browser dan ketik:**
   ```
   http://[IP_ADDRESS]:8000/api.php
   ```
   
   Contoh:
   ```
   http://192.168.1.100:8000/api.php
   ```

4. **Jika berhasil, ubah port 8000 menjadi path ke index.html:**
   ```
   Buka folder frontend dari file manager di komputer
   Copy path ke index.html
   ```

---

## 📞 Hubungi Teknisi Jika

- ❌ Aplikasi crash/error terus-menerus
- ❌ Tidak bisa mengunggah gambar meski sudah coba semua cara
- ❌ Data hilang atau terkorupsi
- ❌ Perlu menambah kategori baru
- ❌ Ingin setup aplikasi di server/hosting

---

## 📚 Informasi Teknis (Untuk Admin)

**Apa yang digunakan aplikasi ini?**
- PHP 7.4+ (backend)
- SQLite (database)
- HTML5 & CSS3 (frontend)
- Vanilla JavaScript (tanpa library besar)

**File Penting:**
- `backend/api.php` - Server logika
- `frontend/index.html` - Halaman utama
- `data/e_katalog.db` - Database
- `frontend/js/api.js` - Koneksi ke server

**Port Default:** `8000`

**Database:** SQLite (tidak perlu konfigurasi)

---

## ✅ Checklist Pemula

Jika Anda baru pertama kali:

- [ ] Setup database dengan `setup_database.bat` ✓
- [ ] Jalankan server dengan `start_server.bat` ✓
- [ ] Buka `frontend/index.html` di browser ✓
- [ ] Lihat daftar produk sample ✓
- [ ] Filter berdasarkan kategori ✓
- [ ] Tambah produk baru ✓
- [ ] Edit produk yang sudah ada ✓
- [ ] Hapus produk ✓
- [ ] Upload gambar ✓
- [ ] Refresh halaman untuk lihat perubahan ✓

**Selamat! Anda sudah mahir menggunakan E-Katalog Kantin! 🎉**

---

## 🎓 Kesimpulan

**E-Katalog Kantin** adalah aplikasi sederhana dan mudah digunakan untuk mengelola produk kantin. Dengan interface yang user-friendly, bahkan pengguna awam sekalipun bisa langsung menggunakannya.

**Ingat:**
- ✅ Selalu backup data secara berkala
- ✅ Gunakan nama dan deskripsi yang jelas
- ✅ Pastikan gambar berkualitas baik
- ✅ Jangan hapus produk asal-asalan

**Selamat menggunakan E-Katalog Kantin!** 🚀

---

## 📧 Feedback & Saran

Jika ada saran atau masukan untuk perbaikan aplikasi, silakan hubungi tim pengembang.

**Versi User Guide:** 1.0  
**Terakhir diupdate:** 2026  
**Dibuat untuk:** E-Katalog Kantin

