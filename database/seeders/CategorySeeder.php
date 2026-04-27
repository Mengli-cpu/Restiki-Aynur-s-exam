<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Turkmen National', 
            'Fast Food',        
            'Sushi & Rolls',    
            'Steaks & Meat',    
            'Hot Soups',        
            'Fresh Salads',     
            'Cold Drinks',      
            'Healthy Food (PP)',
            'Desserts',         
            'Italian Pasta',    
            'Breakfast',        
            'Sea Food',         
            'Pizza',            
            'Coffee & Tea',     
            'Snacks'            
        ];

        foreach ($categories as $ccc) {
            \App\Models\Category::create([
                'name' => $ccc
            ]);
        }
    }
}
