<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'kode_produk' => '1001',
            'nama_produk' => 'Sepatu Adidas',
            'harga' => '100.000',
            'deskripsi' => 'New Produk',
            'slug' => Str::slug('Sepatu-Adidas')
        ]);
    }
}
