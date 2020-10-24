<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('unity_id')->unsigned();
            $table->foreign('unity_id')->references('id')->on('unities');
            $table->integer('carrier_id')->unsigned();
            $table->foreign('carrier_id')->references('id')->on('carriers');
            $table->decimal('shipping')->nullable();
            $table->decimal('discount')->nullable();
            $table->integer('nf')->nullable();
            $table->decimal('total' )->default(0);
            $table->smallInteger('type')->default(0);               // 0 orçamento  | 1 pedido
            $table->smallInteger('status')->default(0);             // 0 aberta     | 1 concluída
            $table->smallInteger('step_process')->default(0);            // 0 criada     | 1 concluída
            $table->smallInteger('payment_status')->default(0);     // 0 não pago | 1 pago
            $table->smallInteger('delivery_status')->default(0);
            $table->string('discount_type', 1)->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
