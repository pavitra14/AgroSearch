<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('listing_title');
            $table->integer('listing_type')->comment("For ex. 1=vehicle, 2=tools, 3=consumables etc");
            $table->text('listing_desc');
            $table->float('listing_rate')->comment('For ex. Rs7/hr, rate is 7');
            $table->string('listing_mode')->comment('For ex. Rs7/hr, mode is hour(hr)');
            $table->string('listing_img')->comment('Listing image url');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('listings');
    }
}
