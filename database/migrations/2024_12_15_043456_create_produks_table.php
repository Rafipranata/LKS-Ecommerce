<?php

use App\Models\KategoriProduk;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk')->uniq();
            $table->string('nama_produk');
            $table->double('harga');
            $table->text('deskripsi');
            $table->string('foto_produk')->nullable();
            $table->string('slug');
            $table->foreignIdFor(KategoriProduk::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
