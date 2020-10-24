<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        // is multi-tenancy
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('cpf')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('notes')->nullable();
            $table->integer('unity_id')->unsigned();
            $table->foreign('unity_id')->references('id')->on('unities');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
