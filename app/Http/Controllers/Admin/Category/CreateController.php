<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Services\Admin\CategoryService;
use Illuminate\Http\Request;

class CreateController extends Controller
{

    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $listParentCategories = $this->categoryService->listParentCategories();
        return view('admin.category.create', compact('listParentCategories'));
    }
}
