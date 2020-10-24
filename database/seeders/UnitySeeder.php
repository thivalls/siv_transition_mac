<?php

namespace Database\Seeders;

use App\Models\Unity;
use Illuminate\Database\Seeder;

class UnitySeeder extends Seeder
{
    public function run()
    {
        Unity::factory(5)->create();
    }
}
