<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('hour_from');
            $table->time('hour_to');
            $table->string('notes');

            $table->integer('property_id')->unsigned();
            $table->integer('tracking_id')->unsigned();
            $table->integer('task_type_id')->unsigned();

            $table->foreign('property_id')->references('id')->on('properties');
            $table->foreign('tracking_id')->references('id')->on('trackings');
            $table->foreign('task_type_id')->references('id')->on('task_types');

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
        Schema::drop('tasks');
    }
}
