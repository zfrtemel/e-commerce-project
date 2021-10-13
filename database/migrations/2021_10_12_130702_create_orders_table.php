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
            $table->id();
            $table->unsignedBigInteger('order_id')->index();
            $table->foreign('order_id')->references("id")->on("users")->onDelete('cascade');
            $table->string('billing_Email');
            $table->string('billing_name');
            $table->string('billing_adress');
            $table->string('billing_city');
            $table->string('billing_card_number');
            $table->integer('isShiped');
            $table->string('customer_note');
            $table->string('billing_total');
            $table->timestamps();
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
