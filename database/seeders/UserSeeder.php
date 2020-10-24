<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory(1)
            ->role(1)
            ->create([
                'name' => 'Thiago',
                'email' => 'super_admin@vandermaq.com.br',
                'password' => bcrypt('trinity'),
                'username' => 'thiago'
            ]);

        User::factory(1)
            ->role(2)
            ->create([
                'name' => 'Biga',
                'email' => 'admin@vandermaq.com.br',
                'password' => bcrypt('trinity'),
                'username' => 'biga'
            ]);

        User::factory(1)
            ->role(3)
            ->create([
                'name' => 'Tio Biga',
                'email' => 'financeiro@vandermaq.com.br',
                'password' => bcrypt('trinity'),
                'username' => 'tio'
            ]);

        User::factory(1)
            ->role(4)
            ->create([
                'name' => 'Vendas',
                'email' => 'vendas@vandermaq.com.br',
                'password' => bcrypt('trinity'),
                'username' => 'vendas'
            ]);

        User::factory(1)
            ->role()
            ->create([
                'name' => 'Comum',
                'email' => 'comum@vandermaq.com.br',
                'password' => bcrypt('trinity'),
                'username' => 'comum'
            ]);
    }
}
