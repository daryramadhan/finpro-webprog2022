<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    public function ProductCategory() {
        return $this->belongsTo(Product::class, 'product_category', 'category_id', 'product_id');
    }
}
