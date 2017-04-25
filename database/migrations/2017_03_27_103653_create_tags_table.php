<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',80);
            $table->timestamps();
        });


        Schema::create('property_tag', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('property_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('property_id')->references('id')->on('properties');
            $table->foreign('tag_id')->references('id')->on('tags');

            $table->timestamps();
        });


        Schema::create('tracking_tag', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tracking_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('tracking_id')->references('id')->on('trackings');
            $table->foreign('tag_id')->references('id')->on('tags');

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
        Schema::drop('property_tag');
        Schema::drop('tracking_tag');
        Schema::drop('tags');
    }
}
