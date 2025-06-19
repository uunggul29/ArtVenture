<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }
    public function produk()
    {
        return $this->hasOne('App\Models\Produk','id','produk_id');
    }
}
