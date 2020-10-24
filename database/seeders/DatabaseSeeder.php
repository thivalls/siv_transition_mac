<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // dd(UserSeeder::class);
        $this->call(UnitySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(ProviderSeeder::class);
        $this->call(CarrierSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductInputSeeder::class);
        $this->call(ProductOutputSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
