<?php

use App\Models\User;
use App\Models\Produk;
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
        Schema::create('kerajang_belanja', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Produk::class);
            $table->foreignIdFor(User::class);
            $table->double('harga');
            $table->integer('jumlah');
            $table->double('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kerajang_belanjas');
    }
};
