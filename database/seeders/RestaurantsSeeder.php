<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => 'Rahat',
                'address' => 'Ashgabat',
                'rating' => 3.8,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'Momo',
                'address' => 'Ashgabat',
                'rating' => 5.0,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'MB',
                'address' => 'Ashgabat',
                'rating' => 3.5,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'Grand Cru',
                'address' => 'Ashgabat',
                'rating' => 4.9,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'Lavka',
                'address' => 'Ashgabat',
                'rating' => 4.8,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'Waka',
                'address' => 'Ashgabat',
                'rating' => 3.6,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'Asushi',
                'address' => 'Ashgabat',
                'rating' => 4.5,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'Pappa Roti',
                'address' => 'Ashgabat',
                'rating' => 3.8,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'Melhem',
                'address' => 'Ashgabat',
                'rating' => 2.8,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'Unic',
                'address' => 'Ashgabat',
                'rating' => 4.8,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'Sha Cofe',
                'address' => 'Ashgabat',
                'rating' => 3.5,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'Hiroo',
                'address' => 'Ashgabat',
                'rating' => 4.1,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'Elek',
                'address' => 'Ashgabat',
                'rating' => 3.7,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'TmSushiLove',
                'address' => 'Ashgabat',
                'rating' => 4.8,
                'phone_num' => +99361886767,
            ],
            [
                'name' => 'Kudo-kudo',
                'address' => 'Ashgabat',
                'rating' => 3.0,
                'phone_num' => +99361886767,
            ],
        ];

        foreach ($restaurants as $rrr) {
            \App\Models\Restaurants::create([
                'name' => $rrr['name'],
                'address' => $rrr['address'],
                'rating' => $rrr['rating'],
                'phone_num' => $rrr['phone_num'],
            ]);
        }
    }
}
