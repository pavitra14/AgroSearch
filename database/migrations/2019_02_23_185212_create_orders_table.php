<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('listing_id');
            $table->unsignedInteger('placed_by_user_id');
            $table->integer('placed_for')->comment('no of days/weeks etc');
            $table->integer('placed_mode')->comment('days/weeks etc');
            $table->string('payment_mode')->nullable();
            $table->string('payment_details')->nullable();
            $table->foreign('listing_id')->references('id')->on('listings')->onDelete('cascade');
            $table->foreign('placed_by_user_id')->references('id')->on('users')->onDelete('cascade');
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
