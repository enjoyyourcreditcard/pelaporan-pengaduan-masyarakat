<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Agama',
            'Ekonomi',
            'Kesehatan',
            'Sosial Inklusif',
            'Keamanan',
            'Politik',
            'Pendidikan',
        ];

        for ($i = 0; $i < count($categories); $i++) { 
            Category::create([
                'name' => $categories[$i],
            ]);
        }
    }
}
