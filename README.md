# Beringin Smart — Portal Pengaduan Sarana & Prasarana Sekolah
> **Edisi Khusus: Kayla Azzahra (XI PPLG 1)**  
> **SMK Negeri 1 Beringin • Tahun Ajaran 2026/2027**  
> Standar Kompetensi Kerja Nasional Indonesia (SKKNI) No. 282 Tahun 2016  
> Tema Identitas Antarmuka: **Sunset Copper & Warm Desert Tangerine**

---

## 📌 Deskripsi Proyek
**Beringin Smart (Kayla Edition)** adalah aplikasi layanan pelaporan kerusakan sarana dan prasarana lingkungan sekolah berbasis Mobile & Web responsif di SMK Negeri 1 Beringin. Aplikasi ini dirancang untuk mempermudah siswa melaporkan kendala fasilitas secara real-time dan transparan ke tim sarpras sekolah.

Arsitektur Teknologi:
- **Backend**: Laravel 11 RESTful API + Autentikasi Sanctum
- **Frontend**: React 18 + Ionic Framework v8 + TypeScript + Vite Bundler
- **Database**: MySQL 8.4 (Port 3306)
- **Tema Visual**: Nuansa elegan **Sunset Copper & Warm Desert Tangerine**

---

## 👥 Hak Akses & Kredensial Uji Coba

| Peran (Role) | Nama Pengguna | Alamat Email | Kata Sandi |
|---|---|---|---|
| **Siswa Utama** | Kayla Azzahra | `kayla@beringin.sch.id` | `password123` |
| **Petugas Sarpras** | Staf Pemeliharaan Sarpras | `petugas@beringin.sch.id` | `password123` |
| **Siswa Pendukung** | Siswa SMKN 1 Beringin | `siswa@beringin.sch.id` | `password123` |

---

## 📸 Dokumentasi & Bukti Pengujian Antarmuka (11 Screenshot)

### 1. Antarmuka Portal Masuk Pengguna (Login)
![01. Login](screenshots/ss_01_halaman_autentikasi_portal.png)

---

### 2. Validasi Keamanan (Error Handling Login Gagal)
![02. Validasi Gagal](screenshots/ss_02_peringatan_kredensial_invalid.png)

---

### 3. Dashboard Beranda Siswa
![03. Dashboard Siswa](screenshots/ss_03_feed_dashboard_pelapor_siswa.png)

---

### 4. Detail Laporan Sarpras (Tampilan Siswa)
![04. Detail Siswa](screenshots/ss_04_detail_informasi_kerusakan.png)

---

### 5. Filter Penyaringan Kategori Sarpras
![05. Filter Kategori](screenshots/ss_05_filter_kategori_kerusakan.png)

---

### 6. Formulir Tambah Pengaduan Kerusakan
![06. Form Tambah](screenshots/ss_06_formulir_tambah_pengaduan.png)

---

### 7. Konfirmasi Tiket Baru Tersimpan
![07. Tiket Baru](screenshots/ss_07_laporan_baru_terdaftar.png)

---

### 8. Dashboard Panel Petugas Sarpras
![08. Dashboard Petugas](screenshots/ss_08_dashboard_kontrol_petugas.png)

---

### 9. Panel Aksi Tindak Lanjut Petugas
![09. Panel Petugas](screenshots/ss_09_panel_eksekusi_pekerjaan.png)

---

### 10. Status Pekerjaan Selesai
![10. Status Selesai](screenshots/ss_10_status_pekerjaan_tuntas.png)

---

### 11. Pengujian Antarmuka Smartphone (Mobile)
![11. Mobile View](screenshots/ss_11_layout_ponsel_responsive.png)

---

## 🚀 Panduan Menjalankan di Komputer Lokal

### 1. Menjalankan Backend API
```powershell
cd D:\Kayla\beringin-backend
php artisan serve
```

### 2. Menjalankan Frontend
```powershell
cd D:\Kayla\Beringin-Smart
npm run dev
```
Akses di browser: `http://localhost:5173`
