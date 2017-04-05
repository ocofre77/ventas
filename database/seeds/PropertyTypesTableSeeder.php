<?php

use Illuminate\Database\Seeder;

class PropertyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::Table('property_types')->delete();

        $states = array(

            array('name'=> 'Casa','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Departamento','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Local Comercial','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Suite','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Oficina','created_at' => date("Y-m-d H:i:s") )

        );


        DB::Table('property_types')->insert($states);


    }
}
