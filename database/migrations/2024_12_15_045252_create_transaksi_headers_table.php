<?php

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi_header', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi');
            $table->date('tanggal_transaksi');
            $table->double('total_bayar');
            $table->integer('status')->default(0)->comment('0=Pending,1=Berhasil,2=Gagal');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Customer::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_headers');
    }
};
