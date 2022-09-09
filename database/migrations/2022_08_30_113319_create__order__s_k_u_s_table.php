<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderSKUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_sku', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('s_k_u_s_id');
            $table->integer('qty')->default(1);
            $table->timestamps();

            $table->foreign('order_id')
            ->references('id')
            ->on('orders');

            $table->foreign('s_k_u_s_id')
            ->references('id')
            ->on('s_k_u_s');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_sku');
    }
}
