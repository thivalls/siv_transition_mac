<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductInput;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Unity;
use App\Models\User;

class ProductInputSeeder extends Seeder
{
    public function run()
    {
        \Tenant::setTenant(null);
        $products = Product::all();
        $providers = Provider::all();
        $users = User::all();
        ProductInput::factory(100)
        ->make()
        ->each(function($input) use ($products, $providers, $users){
            $product = $products->random();
            $provider = $providers->random();
            $user = $users->random();
            \Tenant::setTenant($user);
            $input->product_id = $product->id;
            $input->provider_id = $provider->id;
            $input->user_id = $user->id;
            $input->save();
        });
        // factory(ProductInput::class, 150)
        //     ->make()
        //     ->each(function($input) use ($products, $providers, $users){
        //         $product = $products->random();
        //         $provider = $providers->random();
        //         $user = $users->random();
        //         \Tenant::setTenant($user);
        //         $input->product_id = $product->id;
        //         $input->provider_id = $provider->id;
        //         $input->user_id = $user->id;
        //         $input->save();
        //     });
    }
}
