<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Services\Admin\ProductService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }

    public function main(Request $request) {
        $data = $request->all();
        $this->productService->store($data);
        return redirect()->route('admin.products.index');
    }
}
