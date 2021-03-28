<?php

namespace App\Http\Controllers\User\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function singleProduct()
    {
        return view('user.product.singleProduct');
    }

    public function listProduct()
    {
        return view('user.product.listProduct');
    }
}
