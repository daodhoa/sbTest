<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class ProductImageRepository extends BaseRepository
{

    public function model(): string
    {
        return "App\\Models\\ProductImage";
    }
}
