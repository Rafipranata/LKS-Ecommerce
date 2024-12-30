<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\KategoriProduk;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriProduk::create([
            'nama_kategori' => 'Kemeja',
            'status' => '1',
            'slug' => Str::slug('Kemeja')
        ]);
        KategoriProduk::create([
            'nama_kategori' => 'Baju',
            'status' => '1',
            'slug' => Str::slug('Baju')
        ]);
        KategoriProduk::create([
            'nama_kategori' => 'Celana',
            'status' => '1',
            'slug' => Str::slug('Celana')
        ]);
    }
}
