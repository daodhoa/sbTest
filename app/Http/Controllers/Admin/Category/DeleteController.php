<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function getDelete($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('admin.categories.index');
    }
}
