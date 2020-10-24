<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Stock;
use App\Models\ProductInput;
use App\Models\ProductOutput;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create('pt_BR');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ProductInput::created(function($input){
            $result = Stock::where('product_id', $input->product_id)
                ->where('unity_id', $input->unity_id)->get()->first();

            if($result) {
                $result->stock += $input->amount;
                $result->save();
                return;
            }

            Stock::create([
                'product_id' => $input->product_id,
                'unity_id' => $input->unity_id,
                'stock' => $input->amount,
            ]);
        });

        ProductOutput::created(function($output){
            $result = Stock::where('product_id', $output->product_id)
                ->where('unity_id', $output->unity_id)->get()->first();

            if($result) {
                if(($result->stock - $output->amount) < 0) {
                    throw new \Exception("Você não tem {$output->amount} unidades deste produto em estoque.");
                }
                $result->stock -= $output->amount;
                $result->save();
                return;
            }

            throw new \Exception('Não é possível adicionar estoque negativo');
        });
    }
}
