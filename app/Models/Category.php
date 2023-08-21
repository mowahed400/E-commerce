<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      protected $guarded;
    protected $table = 'order_details';
    use HasFactory;
    public function  child(){
        return $this->hasMany(Category::class,'parent_id');
    }

    public function product(){
        return $this->hasMany(Product::class, 'category_id');
    }
}

