<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory; 
    protected $table = 'news'; 

    public function category ()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function products() 
    {
        return $this->belongsToMany(Product::class, 'new_products', 'new_id', 'product_id');
    }
}
