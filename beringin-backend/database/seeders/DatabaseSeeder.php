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
            'name' => 'Pak Danang (Staf Logistik & Sarpras)',
            'email' => 'petugas@beringin.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'petugas',
        ]);

        // 2. Akun Siswa Utama
        $siswa_utama = User::create([
            'name' => 'Kayla Azzahra (XI PPLG 1)',
            'email' => 'kayla@beringin.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        // 3. Akun Siswa Pendukung
        $siswa_pendukung = User::create([
            'name' => 'Fajar Ramadhan (XI PPLG 2)',
            'email' => 'siswa@beringin.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        // 4. Data Awal Laporan Pengaduan Sarpras (Edisi Kayla)
        
        Laporan::create([
            'user_id' => $siswa_utama->id,
            'judul' => 'Kaca Jendela Ruang Praktik RPL Pecah Terhempas Angin',
            'deskripsi' => 'Kaca jendela sisi barat pecah saat badai angin kemarin siang, pecahan kaca berserakan di kusen.',
            'lokasi' => 'Ruang Praktik RPL Gedung C',
            'kategori' => 'Ruang Belajar',
            'foto' => null,
            'status' => 'diproses',
        ]);

        Laporan::create([
            'user_id' => $siswa_pendukung->id,
            'judul' => 'Stopkontak Meja Server Lab Komputer 1 Mati Total',
            'deskripsi' => 'Jalur daya ke switch rack dan workstation server tidak ada aliran listrik.',
            'lokasi' => 'Lab Komputer 1 Lt. 1',
            'kategori' => 'Kelistrikan & Keamanan',
            'foto' => null,
            'status' => 'selesai',
        ]);

        Laporan::create([
            'user_id' => $siswa_utama->id,
            'judul' => 'Keran Wastafel Depan Ruang UKS Lepas Ulir',
            'deskripsi' => 'Keran wastafel tidak bisa diputar kencang dan air terus menetes membasahi lantai teras.',
            'lokasi' => 'Depan Ruang UKS Gedung B',
            'kategori' => 'Fasilitas Umum',
            'foto' => null,
            'status' => 'menunggu',
        ]);

    }
}
