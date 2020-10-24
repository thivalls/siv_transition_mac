<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOutputsTable extends Migration
{
    public function up()
    {
        // is multi-tenancy
        Schema::create('product_outputs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('amount')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('unity_id')->unsigned();
            $table->foreign('unity_id')->references('id')->on('unities');
            $table->integer('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nf')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_outputs');
    }
}
