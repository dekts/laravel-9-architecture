<?php

namespace Database\Seeders;

use App\Models\Example\Example;
use Illuminate\Database\Seeder;

class ExamplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Example::factory()->count(50)->create();
    }
}
