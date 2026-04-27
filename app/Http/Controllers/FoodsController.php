<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodsController extends Controller
{
    public function foodsIndex()
    {
        $foods = \App\Models\Food::with(['restaurant', 'category'])->get();
        return view('foods.index', compact('foods'));
    }

    public function foodsShow($id)
    {
        $food = \App\Models\Food::with(['restaurant', 'category'])->findOrFail($id);
        return view('foods.show', compact('food'));
    }
}
