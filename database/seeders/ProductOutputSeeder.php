<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductOutput;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Unity;
use App\Models\User;

class ProductOutputSeeder extends Seeder
{
    public function run()
    {
        \Tenant::setTenant(null);
        $products = Product::all();
        $providers = Provider::all();
        $users = User::all();
        ProductOutput::factory(2)
            ->make()
            ->each(function($output) use ($products, $providers, $users){
                $product = $products->random();
                $provider = $providers->random();
                $user = $users->random();
                \Tenant::setTenant($user);
                $output->product_id = $product->id;
                $output->provider_id = $provider->id;
                $output->user_id = $user->id;
                $output->save();
            });
        // factory(ProductOutput::class, 2)
        //     ->make()
        //     ->each(function($output) use ($products, $providers, $users){
        //         $product = $products->random();
        //         $provider = $providers->random();
        //         $user = $users->random();
        //         \Tenant::setTenant($user);
        //         $output->product_id = $product->id;
        //         $output->provider_id = $provider->id;
        //         $output->user_id = $user->id;
        //         $output->save();
        //     });
    }
}
