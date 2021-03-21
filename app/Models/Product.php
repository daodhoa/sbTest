<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code', 'name', 'origin', 'alcohol', 'volume', 'price', 'quantity', 'category_id', 'del_flag'
    ];

    public function images() {
        return $this->belongsToMany('App\Models\Image', 'product_images', 'product_id', 'image_id');
    }
}
