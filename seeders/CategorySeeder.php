<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Semua', 'slug' => 'semua'],
            ['name' => 'Menyanyi & Menari', 'slug' => 'menyanyi-menari'],
            ['name' => 'Komedi', 'slug' => 'komedi'],
            ['name' => 'Olahraga', 'slug' => 'olahraga'],
            ['name' => 'Anime & Komik', 'slug' => 'anime-komik'],
            ['name' => 'Hubungan', 'slug' => 'hubungan'],
            ['name' => 'Pertunjukan', 'slug' => 'pertunjukan'],
            ['name' => 'Lipsync', 'slug' => 'lipsync'],
            ['name' => 'Kehidupan Sehari-hari', 'slug' => 'kehidupan-sehari-hari'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
