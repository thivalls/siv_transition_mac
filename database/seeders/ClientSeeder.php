<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        \Tenant::setTenant(User::find(1));
        Client::factory(5)->create();
        \Tenant::setTenant(User::find(2));
        Client::factory(5)->create();
        \Tenant::setTenant(User::find(3));
        Client::factory(5)->create();
        \Tenant::setTenant(User::find(4));
        Client::factory(5)->create();
        \Tenant::setTenant(User::find(5));
        Client::factory(5)->create();
    }
}
