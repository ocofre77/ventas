<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');


            $table->decimal('surface',10,2);
            $table->decimal('useful_surface',10,2);
            $table->integer('bedrooms');
            $table->integer('bathrooms');


            $table->integer('tag_id')->unsigned();
            $table->integer('property_status_id')->unsigned();
            $table->integer('property_type_id')->unsigned();

            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('property_status_id')->references('id')->on('property_states');
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
        Schema::drop('properties');
    }
}
