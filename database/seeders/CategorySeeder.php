<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'nombre' => 'Café',
            'icono' => 'cafe',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Hamburguesas',
            'icono' => 'hamburguesa',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Pizzas',
            'icono' => 'pizza',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Donas',
            'icono' => 'dona',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Pasteles',
            'icono' => 'pastel',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Galletas',
            'icono' => 'galletas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
