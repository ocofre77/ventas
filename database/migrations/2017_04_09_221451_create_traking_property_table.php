<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrakingPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tracking_property', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tracking_id')->unsigned();
            $table->integer('property_id')->unsigned();

            $table->foreign('tracking_id')->references('id')->on('trackings');
            $table->foreign('property_id')->references('id')->on('properties');

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
        Schema::drop('tracking_property');
    }
}
