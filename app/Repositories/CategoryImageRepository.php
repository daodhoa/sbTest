<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class CategoryImageRepository extends BaseRepository
{

    public function model(): string
    {
        return "App\\Models\\CategoryImage";
    }
}
