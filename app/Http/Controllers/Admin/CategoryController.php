<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
     public function categoryPage()
    {
        return view('admin.pages.category');
    }
    
     public function CategoryList(Request $request)
    {
        return Category::get();
    }

    public function CategoryCreate(Request $request)
    {
        return Category::create([
            'name' => $request->input('name'),
            'user_id' => 1,
        ]);
    }

    public function CategoryUpdate(Request $request)
    {
        $category_id = $request->input('id');
        return Category::where('id', $category_id)->update([
            'name' => $request->input('name'),
        ]);
    }

    public function CategoryDelete(Request $request)
    {
        $category_id = $request->input('id');
        return Category::where('id', $category_id)->delete();
    }

    public function CategoryId(Request $request)
    {
        $categoryId = $request->input('id');
        return Category::where('id', $categoryId)->first();
    }
}


