<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory; // 2. И это внутри класса!

    protected $fillable = [
        'category_id',
        'restaurants_id',
        'name',
        'price',
        'code',
        'like_count',
        'type'
    ];

    public function restaurant() 
    {
        return $this->belongsTo(Restaurants::class, 'restaurants_id');
    }

    public function category() 
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
