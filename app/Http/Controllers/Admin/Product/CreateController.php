<?php

namespace App\Http\Controllers\Admin\Product;


use App\Http\Controllers\Controller;
use App\Services\Admin\CategoryService;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService) {
        $this->categoryService = $categoryService;
    }

    public function main(Request $request) {
        $categories = $this->categoryService->listCategories();
        return view('admin.product.create', ['categories' => $categories]);
    }
}
