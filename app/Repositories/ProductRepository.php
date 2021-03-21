<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class ProductRepository extends BaseRepository
{

    public function model(): string
    {
        return "App\\Models\\Product";
    }
}
