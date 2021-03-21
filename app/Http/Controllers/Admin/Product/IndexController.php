<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Services\Admin\ProductService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }

    public function main(Request $request) {
        $products = $this->productService->listProducts();
        return view('admin.product.index', ['products' => $products]);
    }
}
