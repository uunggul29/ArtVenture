<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;protected $fillable = [
        'category',
    ];
    

    // Relasi Produk ke Kategori (Product)
    public function product()
    {
        // 'category' = kolom di tabel produks yg jadi foreign key
        // 'product_name' = kolom di tabel products yg jadi primary/unique key
        return $this->belongsTo(Product::class, 'category', 'product_name');
    }
}
