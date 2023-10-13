<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = ["HTML", "CSS", "SCSS", "BOOTSTRAP", "TAILWIND", "JS", "VUE", "PHP", "LARAVEL"];
        
        foreach ($technologies as $technology) {
            Technology::create([
                "name"=> $technology,
                "color" => $faker->rgbColor(),
                ]
            );
        }
    }
}
