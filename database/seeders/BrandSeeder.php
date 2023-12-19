<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            [
                'id' => 1,
                'name' => 'Walton',
                'slug' => 'walton',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Sony',
                'slug' => 'sony',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Samsung',
                'slug' => 'samsung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Brand::insert($brands);
    }
}
