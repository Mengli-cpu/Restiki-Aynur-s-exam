<?php

namespace App\Http\Controllers;

use \App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categoriesIndex()
    {
        $categories = Category::get();
        return view("categories.index", compact('categories'));
    }
}
