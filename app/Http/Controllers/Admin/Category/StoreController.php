<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Services\Admin\CategoryService;
use App\Services\ImageService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    private $categoryService;
    private $imageService;

    public function __construct(CategoryService $categoryService, ImageService $imageService)
    {
        $this->imageService = $imageService;
        $this->categoryService = $categoryService;
    }

    public function main(Request $request): \Illuminate\Http\RedirectResponse
    {
        $requestData = $request->all();
        $categoryData = [
            'name' => $requestData['name'],
            'description' => $requestData['description'],
            'parent_id' => $requestData['parent_id'],
            'image' => $request->file('image')
        ];

        $this->categoryService->store($categoryData);
        return redirect()->route('admin.categories.index');
    }
}
