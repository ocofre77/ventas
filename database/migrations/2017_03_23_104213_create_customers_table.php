<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->string('email');
            $table->string('phone');
            $table->string('cell_phone');

            $table->string('address');
            $table->string('city');

            $table->integer('customer_type_id')->unsigned();

            $table->foreign('customer_type_id')->references('id')->on('customer_types');

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
        Schema::drop('customers');
    }
}
