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
            ['name' => 'Technology', 'description' => 'Technology news'],
            ['name' => 'Science', 'description' => 'Science news'],
            ['name' => 'Health', 'description' => 'Health news'],
            ['name' => 'Sports', 'description' => 'Sports news'],
            ['name' => 'Entertainment', 'description' => 'Entertainment news'],
            ['name' => 'Business', 'description' => 'Business news'],
            ['name' => 'Politics', 'description' => 'Politics news'],
            ['name' => 'World', 'description' => 'World news'],
            ['name' => 'Local', 'description' => 'Local news'],
            ['name' => 'Opinion', 'description' => 'Opinion news'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
