<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduceImage extends Model
{
    use HasFactory;
    protected $guarded;
    public function productColorSize()
    {
        return $this->belongsTo(ProductColorSize::class,'product_color_size_id');
    }
}
