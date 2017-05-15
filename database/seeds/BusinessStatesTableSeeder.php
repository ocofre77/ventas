<?php

use Illuminate\Database\Seeder;

class BusinessStatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::Table('business_states')->delete();

        $states = array(

            array('name'=> 'Contacto','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Prospecto','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Visitado','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Negociación','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Ganado','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Inactivo','created_at' => date("Y-m-d H:i:s") ),

        );


        DB::Table('business_states')->insert($states);
    }
}
