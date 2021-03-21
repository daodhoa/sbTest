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
        $imagePath = $this->saveCategoryImage($product['image']);
        $savedImage = $this->imageRepository->create([
            'path' => $imagePath
        ]);
        $savedProduct = $this->productRepository->create([
            'code' => 'CODE-123',
            'name' => $product['name'],
            'origin' => $product['origin'],
            'category_id' => $product['category'],
            'alcohol' => $product['alcohol'],
            'volume' => $product['volume'],
            'price' => $product['price'],
            'quantity' => $product['quantity']
        ]);

        $this->productImageRepository->create([
            'product_id' => $savedProduct->id,
            'image_id' => $savedImage->id
        ]);

        return true;
    }

    /**
     * @param $image $request->file('image')
     * @return string filePath
     */
    private function saveCategoryImage($image): string
    {
        $this->imageService->saveImage(self::STORAGE_DIRECTORY, $image, $image->getClientOriginalName());
        return self::PUBLIC_DIRECTORY.$image->getClientOriginalName();
    }
}
