<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function sub_category()
    {
        return $this->hasOne(SubCategory::class, 'id', 'sub_category_id');
    }
}
