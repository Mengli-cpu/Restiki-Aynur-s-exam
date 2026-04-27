<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\FoodsController;
use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'categoriesIndex'])->name('categories');
Route::get('/restaurants', [App\Http\Controllers\RestaurantsController::class, 'restaurantsIndex'])->name('restaurants');
Route::get('/foods', [App\Http\Controllers\FoodsController::class, 'foodsIndex'])->name('foods');
Route::get('/foods/show/{id}', [App\Http\Controllers\FoodsController::class, 'foodsShow']);



