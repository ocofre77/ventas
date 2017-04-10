<?php

use Illuminate\Database\Seeder;

class CustomerTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('customer_types')->delete();


        $types = array(

            array('name'=> 'Prospecto', 'created_at' => date("Y-m-d H:i:s")),
            array('name'=> 'Cliente', 'created_at' => date("Y-m-d H:i:s")),
            array('name'=> 'Propietario', 'created_at' => date("Y-m-d H:i:s") )

        );

        DB::Table('customer_types')->insert($types);



    }
}
