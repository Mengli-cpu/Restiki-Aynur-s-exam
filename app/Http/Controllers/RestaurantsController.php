<?php

namespace App\Http\Controllers;

use App\Models\Restaurants; 
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    public function restaurantsIndex()
    {
    
        $restaurants = Restaurants::all();

        
        return view('restaurants.index', compact('restaurants'));
    }
}