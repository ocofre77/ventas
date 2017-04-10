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

            $table->integer('bedrooms_min')->unsigned();
            $table->integer('bedrooms_max')->unsigned();

            $table->integer('bathrooms_min')->unsigned();
            $table->integer('bathrooms_max')->unsigned();

            $table->integer('area_min')->unsigned();
            $table->integer('area_max')->unsigned();

            $table->decimal('value_min',10,2);
            $table->decimal('value_max',10,2);

            $table->integer('contact_id')->unsigned();
            $table->integer('business_status_id')->unsigned();
            $table->integer('property_type_id')->unsigned();


            $table->foreign('business_status_id')->references('id')->on('business_states');
            $table->foreign('contact_id')->references('id')->on('customers');
            $table->foreign('property_type_id')->references('id')->on('property_types');


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
