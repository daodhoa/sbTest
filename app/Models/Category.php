<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'description', 'parent_id', 'sort_order'
    ];

    public function images() {
        return $this->belongsToMany('App\Models\Image', 'category_images', 'category_id', 'image_id');
    }
}
