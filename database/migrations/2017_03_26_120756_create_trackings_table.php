<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('bedrooms_min')->unsigned()->nullable();
            $table->integer('bedrooms_max')->unsigned()->nullable();

            $table->integer('bathrooms_min')->unsigned()->nullable();
            $table->integer('bathrooms_max')->unsigned()->nullable();

            $table->integer('area_min')->unsigned()->nullable();
            $table->integer('area_max')->unsigned()->nullable();

            $table->decimal('value_min',10,2)->nullable();
            $table->decimal('value_max',10,2)->nullable();

            $table->integer('contact_id')->unsigned();
            $table->integer('business_status_id')->unsigned();
            $table->integer('property_type_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('business_status_id')->references('id')->on('business_states');
            $table->foreign('contact_id')->references('id')->on('customers');
            $table->foreign('property_type_id')->references('id')->on('property_types');
            $table->foreign('user_id')->references('id')->on('users');


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
        Schema::drop('trackings');
    }
}
