<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::Table('states')->delete();

        $states = array(

            array('name'=> 'Azuay','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Bolivar','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Cañar','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Carchi','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Chimborazo','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Cotopaxi','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'El Oro','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Esmeraldas','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Galápagos','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Guayas','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Imbabura','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Loja','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Los Rios','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Manabí','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Morona Santiago','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Napo','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Orellana','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Pastaza','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Pichincha' ,'created_at' => date("Y-m-d H:i:s")),
            array('name'=> 'Santa Elena','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Santo Domingo de los Tsáchilas','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Sucumbíos','created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Tungurahua' ,'created_at' => date("Y-m-d H:i:s")),
            array('name'=> 'Zamora Chinchipe','created_at' => date("Y-m-d H:i:s") )

        );


        DB::Table('states')->insert($states);

    }
}
