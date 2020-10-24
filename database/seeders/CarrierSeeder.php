<?php

namespace Database\Seeders;

use App\Models\Carrier;
use App\Models\User;
use Illuminate\Database\Seeder;

class CarrierSeeder extends Seeder
{
    public function run()
    {
        \Tenant::setTenant(User::find(1));
        Carrier::factory(10)->create();
        \Tenant::setTenant(User::find(2));
        Carrier::factory(10)->create();
        \Tenant::setTenant(User::find(3));
        Carrier::factory(10)->create();
        \Tenant::setTenant(User::find(4));
        Carrier::factory(10)->create();
        \Tenant::setTenant(User::find(5));
        Carrier::factory(10)->create();
    }
}
