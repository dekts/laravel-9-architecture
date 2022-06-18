<?php

namespace Database\Seeders;

use App\Models\ExampleType\ExampleType;
use Illuminate\Database\Seeder;

class ExampleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExampleType::factory()->count(20)->create();
    }
}
