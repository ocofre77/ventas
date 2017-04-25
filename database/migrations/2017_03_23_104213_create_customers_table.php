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
            $table->string('name',60);
            $table->string('email',120);
            $table->string('phone',10);
            $table->string('cell_phone',10);
            $table->string('address',250);
            $table->string('city',80);
            $table->integer('user_id')->unsigned();
            $table->integer('customer_type_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
