<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        protected $fillable = [
        'product_name',
    ];

    public function produks()
    {
        return $this->hasMany(Produk::class, 'category', 'product_name');
    }
}
