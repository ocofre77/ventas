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

            array('name'=> 'Ambato', 'created_at' => date("Y-m-d H:i:s")),
            array('name'=> 'Zamora', 'created_at' => date("Y-m-d H:i:s") )

        );

        DB::Table('customer_types')->insert($types);



    }
}
