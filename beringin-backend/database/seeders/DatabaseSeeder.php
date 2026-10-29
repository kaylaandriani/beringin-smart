<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Laporan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Petugas Sarpras
        $petugas = User::create([
            'name' => 'Pak Danang (Teknisi Sarpras)',
            'email' => 'petugas@beringin.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'petugas',
        ]);

        // 2. Akun Siswa Utama
        $siswa = User::create([
            'name' => 'Kayla Andriani (XI PPLG 1)',
            'email' => 'kayla@beringin.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        // 3. Akun Siswa Pendukung
        $teman = User::create([
            'name' => 'Fajar Ramadhan (Siswa XI PPLG 1)',
            'email' => 'siswa@beringin.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        // 4. Data Awal Laporan Pengaduan Sarpras (Kayla Andriani)
        Laporan::create([
            'user_id' => $siswa->id,
            'nama' => 'Pintu Lemari Penyimpanan Alat Bengkel Rusak Kuncinya',
            'lokasi' => 'Ruang Praktik & Bengkel RPL Lt. 1',
            'kategori' => 'Laboratorium',
            'deskripsi' => 'Kunci lemari besi penyimpanan peralatan praktikum tang crimping dan tester kabel aus sehingga tidak bisa dikunci rapat.',
            'status' => 'Sedang Diproses',
        ]);

        Laporan::create([
            'user_id' => $teman->id,
            'nama' => 'Lampu Sorot Lapangan Basket Mati Satu Sisi',
            'lokasi' => 'Lapangan Upacara & Olahraga Utama',
            'kategori' => 'Lingkungan/Taman',
            'deskripsi' => 'Lampu floodlight LED sebelah utara mati, penerangan kurang memadai saat ekskul basket sore hari.',
            'status' => 'Menunggu',
        ]);

        Laporan::create([
            'user_id' => $siswa->id,
            'nama' => 'Gagang Pintu Ruang OSIS Longgar dan Sulit Diputar',
            'lokasi' => 'Gedung Pusat Kegiatan Siswa',
            'kategori' => 'Lingkungan/Taman',
            'deskripsi' => 'Handle door lock silinder longgar dan per mekanik di dalamnya tidak kembali ke posisi semula.',
            'status' => 'Selesai',
        ]);

        Laporan::create([
            'user_id' => $teman->id,
            'nama' => 'Saluran Air Talang Hujan Depan Perpustakaan Tumpah',
            'lokasi' => 'Gedung Perpustakaan Sekolah',
            'kategori' => 'Lingkungan/Taman',
            'deskripsi' => 'Pipa talang air tertutup dedaunan kering sehingga air hujan meluber ke selasar depan pintu masuk.',
            'status' => 'Sedang Diproses',
        ]);

        Laporan::create([
            'user_id' => $siswa->id,
            'nama' => 'Meja Siswa Nomor 12 Goyang dan Baut Kaki Lepas',
            'lokasi' => 'Ruang Teori XI PPLG 1',
            'kategori' => 'Fasilitas Kelas',
            'deskripsi' => 'Kaki meja kayu sisi kanan goyang dan baut penahan rangka besi di bawah meja terlepas satu buah.',
            'status' => 'Selesai',
        ]);
    }
}
