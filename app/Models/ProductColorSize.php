<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $guarded;
    public function productColor()
    {
        return $this->belongsTo(ProductColor::class,'product_color_id');
    }

    public function productSize()
    {
        return $this->belongsTo(ProduceSize::class,'product_size_id');
    }
}
