<?php

use Illuminate\Database\Seeder;

class PropertyStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('property_states')->delete();

        $states = array(

            array('name'=> 'Reservado','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Disponible','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Vendido','created_at' => date("Y-m-d H:i:s") )

        );


        DB::Table('property_states')->insert($states);

    }
}
