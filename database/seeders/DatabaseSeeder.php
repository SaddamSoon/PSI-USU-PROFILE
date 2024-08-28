<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        
        // Seeder untuk tabel kampus
        DB::table('kampus')->insert([
            'namaKampus' => 'Universitas XYZ',
            'alamat' => 'Jl. Pahlawan No. 123, Jakarta',
            'telepon' => '021-12345678',
            'email' => 'info@universitasxyz.ac.id',
            'website' => 'https://www.universitasxyz.ac.id',
            'deskripsi' => 'Universitas XYZ adalah salah satu universitas terkemuka di Indonesia.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder untuk tabel fakultas
        DB::table('fakultas')->insert([
            'namaFakultas' => 'Fakultas Teknik',
            'dekan' => 'Dr. Ir. Budi Setiawan, M.T.',
            'deskripsi' => 'Fakultas Teknik dengan berbagai jurusan teknik.',
            'kampus_id' => 1, // Sesuaikan dengan ID kampus yang sudah ada
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder untuk tabel program_studi
        DB::table('program_studi')->insert([
            'namaProgramStudi' => 'Teknik Informatika',
            'kodeProgramStudi' => 'TI',
            'jenjang' => 'S1',
            'deskripsi' => 'Program studi yang mempelajari tentang teknologi informasi.',
            'fakultas_id' => 1, // Sesuaikan dengan ID fakultas yang sudah ada
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Seeder untuk tabel berita
        DB::table('berita')->insert([
            'judulBerita' => 'Penerimaan Mahasiswa Baru',
            'tanggalPublikasi' => now(),
            'konten' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos repudiandae quam, iste rem rerum fugiat architecto corrupti temporibus autem molestiae alias quas sunt error, harum, nemo enim ullam! Excepturi, optio.
            Earum debitis labore commodi fugiat, optio tempora delectus ratione culpa voluptates dolores eos corrupti alias, asperiores iure voluptate explicabo, pariatur eveniet voluptas vel! Tempore qui rem exercitationem ullam, delectus fugiat?',
            'penulis' => 'Admin',
            'gambar' => 'berita1.jpg',
            'kampus_id' => 1, // Sesuaikan dengan ID kampus yang sudah ada
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder untuk tabel kegiatan
        DB::table('kegiatan')->insert([
            'namaKegiatan' => 'Seminar Nasional Teknologi Informasi',
            'tanggalKegiatan' => now(),
            'deskripsi' => 'Seminar yang membahas perkembangan teknologi informasi terbaru.',
            'gambar' => 'seminar1.jpg',
            'kampus_id' => 1, // Sesuaikan dengan ID kampus yang sudah ada
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder untuk tabel galeri
        DB::table('galeri')->insert([
            'judul' => 'Galeri Wisuda 2024',
            'deskripsi' => 'Foto-foto dari acara wisuda Universitas XYZ tahun 2024.',
            'urlGambar' => 'galeri1.jpg',
            'kampus_id' => 1, // Sesuaikan dengan ID kampus yang sudah ada
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder untuk tabel pendaftaran
        DB::table('pendaftaran')->insert([
            'jenisPendaftaran' => 'Pendaftaran Mahasiswa Baru',
            'persyaratan' => 'Fotokopi Ijazah, Transkrip Nilai, Foto 3x4.',
            'jadwal' => now(),
            'biaya' => 150000,
            'kampus_id' => 1, // Sesuaikan dengan ID kampus yang sudah ada
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder untuk tabel kontak
        
            DB::table('kontak')->insert([
                'namaKontak' => 'bujang Enam',
                'telepon' => '082838283332',
                'email' => 'fathur@mail.com',
                'alamat' => 'Medan Tulentt',
                'kampus_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('carousel_items')->insert([
            'title' => 'Fakultas Teknik',
            'description' => 'Fakultas Teknik adalah salah satu fakultas unggulan di kampus kami.',
            'image' => 'image1.jpg',
            ]);
            DB::table('carousel_items')->insert([
            'title' => 'Fakultas Ekonomi',
            'description' => 'Fakultas Ekonomi menawarkan berbagai program studi terkait bisnis dan manajemen.',
            'image' => 'image2.jpg',
            ]);

        
    }
}
