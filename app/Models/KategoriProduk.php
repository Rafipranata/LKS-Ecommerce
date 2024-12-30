<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    protected $table = 'kategori_produk';
    

    protected $guarded = [];

    public function labelStatus($status){
        if ($status == 1) {
            return '<span class="badge bg-success">Aktif</span>';
        } 
        if ($status == 0) {
            return '<span class="badge bg-danger">Tidak AKtif</span>';
        }
    }
}
