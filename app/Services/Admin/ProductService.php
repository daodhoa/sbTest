<?php

namespace App\Services\Admin;

use App\Repositories\ProductImageRepository;
use App\Repositories\ProductRepository;
use App\Repositories\ImageRepository;
use App\Services\ImageService;

class ProductService
{
    const STORAGE_DIRECTORY = 'public/products';
    const PUBLIC_DIRECTORY = 'storage/products/';
    private $productRepository;
    private $imageService;
    private $imageRepository;
    private $productImageRepository;

    public function __construct(
        ProductRepository $productRepository,
        ImageService $imageService,
        ImageRepository $imageRepository,
        ProductImageRepository $productImageRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->imageService = $imageService;
        $this->imageRepository = $imageRepository;
        $this->productImageRepository = $productImageRepository;
    }

    public function listProducts()
    {
        return $this->productRepository->with(['images'])->findWhere(['products.del_flag' => 0])->all();
    }

    public function store($product): bool
    {

    }
}
