<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryImage extends Model
{
    protected $table = 'category_images';

    protected $fillable = [
        'image_id', 'category_id'
    ];
}
