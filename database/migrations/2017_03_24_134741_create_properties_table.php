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
            $table->string('name',30)->unique();
            $table->string('address',250);
            $table->decimal('area',10,2);
            $table->decimal('useful_area',10,2);
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->decimal('value',10,2);
            $table->string('notes',2);

            $table->integer('city_id')->unsigned();
            $table->integer('property_status_id')->unsigned();
            $table->integer('property_type_id')->unsigned();
            $table->integer('owner_id')->nullable()->unsigned();

            $table->foreign('owner_id')->references('id')->on('customers');
            $table->foreign('property_status_id')->references('id')->on('property_states');
            $table->foreign('property_type_id')->references('id')->on('property_types');
            $table->foreign('city_id')->references('id')->on('cities');

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
