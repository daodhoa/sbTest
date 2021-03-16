<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Services\Admin\CategoryService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        $categories = $this->categoryService->listCategories();
        return view('admin.category.index', ['categories' => $categories]);
    }
}
