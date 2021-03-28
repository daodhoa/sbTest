<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function getEdit($id)
    {
        $categories = Category::findOrFail($id);
        return view('admin.category.edit', compact('categories'));
    }

    public function uploadImageCategory($images)
    {
        $image = $images->getClientOriginalName();
        $images->storeAs(('public/categories'), $image);
        return $image;
    }

    public function postEdit(Request $request , $id)
    {
        $data = $request->all();
        $categories = Category::find($id);
        if ($request->hasFile('image')) {
            $images = $categories->image;
            Storage::disk('public')->delete('/categories/'.$images);
            $image = $this->uploadImageCategory($request->file('image'));
            $data['image'] = $image;
        }
        $categories->update($data);
        dd($data);
        return redirect()->route('admin.categories.index')->with(['message'=>'Sửa thành công !']);
    }

}
