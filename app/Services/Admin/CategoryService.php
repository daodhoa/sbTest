<?php

namespace App\Services\Admin;

use App\Repositories\CategoryImageRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ImageRepository;
use App\Services\ImageService;
use Prettus\Validator\Exceptions\ValidatorException;

class CategoryService
{
    const STORAGE_DIRECTORY = 'public/categories';
    const PUBLIC_DIRECTORY = 'storage/categories/';
    private $categoryRepository;
    private $imageService;
    private $imageRepository;
    private $categoryImageRepository;

    public function __construct(
        CategoryRepository $categoryRepository,
        ImageService $imageService,
        ImageRepository $imageRepository,
        CategoryImageRepository $categoryImageRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->imageService = $imageService;
        $this->imageRepository = $imageRepository;
        $this->categoryImageRepository = $categoryImageRepository;
    }

    public function listCategories()
    {
        return $this->categoryRepository->with(['images'])->findWhere(['categories.del_flag' => 0])->all();
    }

    public function listParentCategories(): array
    {
        return $this->categoryRepository->findWhere(['del_flag' => 0, 'parent_id' => 0])->all();
    }

    public function store($category): bool
    {
        try {
            $imagePath = $this->saveCategoryImage($category['image']);
            $savedImage = $this->imageRepository->create([
                'path' => $imagePath
            ]);
            $savedCategory = $this->categoryRepository->create([
                'name' => $category['name'],
                'description' => $category['description'],
                'parent_id' => $category['parent_id']
            ]);

            $this->categoryImageRepository->create([
                'category_id' => $savedCategory->id,
                'image_id' => $savedImage->id
            ]);

            return true;
        } catch (ValidatorException $e) {
            return false;
        }
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
