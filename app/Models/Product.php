<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function new()
    {
        return $this->belongsToMany(News::class, 'new_products', 'product_id', 'new_id');
    }
}
