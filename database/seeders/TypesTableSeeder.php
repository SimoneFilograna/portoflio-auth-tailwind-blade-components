<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ["Front-End", "Back-End", "Fullstack", "Design"];

        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->type = $type;
            $new_type->save();
        }
    }
}
