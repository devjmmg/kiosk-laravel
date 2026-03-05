<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'icono' => 'cafe',
                'nombre' => 'Café'
            ],
            [
                'id' => 2,
                'icono' => 'hamburguesa',
                'nombre' => 'Hamburguesas'
            ],
            [
                'id' => 3,
                'icono' => 'hotdog',
                'nombre' => 'Hot dog'
            ],
            [
                'id' => 4,
                'icono' => 'pizza',
                'nombre' => 'Pizzas'
            ],
            [
                'id' => 5,
                'icono' => 'dona',
                'nombre' => 'Donas'
            ],
            [
                'id' => 6,
                'icono' => 'pastel',
                'nombre' => 'Pasteles'
            ],
            [
                'id' => 7,
                'icono' => 'galletas',
                'nombre' => 'Galletas'
            ]
        ];

        Category::insert($categories);
    }
}
