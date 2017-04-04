<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::Table('tags')->delete();

        $tags = [
            array('name'=> 'Garege','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Bodega','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Patio','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Armarios','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Hidromasajes','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Cuarto de Servicio','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Baño de Servicio','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Cuarto de Máquinas','created_at'=>date("Y-m-d H:i:s"))


        ];

        DB::Table('tags')->insert($tags);

    }
}
