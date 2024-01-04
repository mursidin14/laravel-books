<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories()
    {
        return view('categories', [
            'title' => 'Category',
            'categories' => Category::all()
        ]);
    }

    public function category(Category $category)
    {
        return view('category', [
            'title' => 'Category',
            'books' => $category->books,
            'category' => $category->name
        ]);
    }
}
