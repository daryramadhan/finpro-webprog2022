<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function Product_Category() {
        return $this->belongsTo(Categories::class,'product_category', 'category_id','id');
    }
}
