<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ImageService
{
    public function __construct()
    {
    }

    public function saveImage($directory, $image, $name)
    {
        return $image->storeAs($directory, $name);
    }

}
