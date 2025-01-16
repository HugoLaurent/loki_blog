<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'author' => $faker->name,
                'image' => "https://picsum.photos/200/" . $faker->numberBetween(200, 300),
                'start_article' => $faker->paragraph,
                'slug' => $faker->slug,
                'category_id' => $faker
                    ->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
