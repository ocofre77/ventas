<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->string('email');
            $table->string('phone');
            $table->string('cell_phone');

            $table->string('address');
            $table->string('city');


            $table->integer('customer_id')->unsigned();

            $table->foreign('customer_id')->references('id')->on('customer_type');



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
        Schema::drop('customer');
    }
}
