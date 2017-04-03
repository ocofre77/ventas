<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('cities')->delete();

        $cities = array(

            array('name'=> 'Azuay','state_id'=>1,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Guaranda','state_id'=>2,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Azogues','state_id'=>3,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Tulcán','state_id'=>4,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Riobamba','state_id'=>5,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Latacunga','state_id'=>6,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Machala','state_id'=>7,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Esmeraldas','state_id'=>8,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Puerto Baquerizo Moreno','state_id'=>9,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Guayaquil','state_id'=>10,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Ibarra','state_id'=>11,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Loja','state_id'=>12,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Babahoyo','state_id'=>13,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Portoviejo','state_id'=>14,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Macas','state_id'=>15,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Tena','state_id'=>16,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Francisco de Orellana','state_id'=>17,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Puyo','state_id'=>18,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Quito' ,'state_id'=>19,'created_at' => date("Y-m-d H:i:s")),
            array('name'=> 'Santa Elena','state_id'=>20,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Santo Domingo','state_id'=>21,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Nueva Loja','state_id'=>22,'created_at' => date("Y-m-d H:i:s") ),
            array('name'=> 'Ambato' ,'state_id'=>23,'created_at' => date("Y-m-d H:i:s")),
            array('name'=> 'Zamora','state_id'=>24,'created_at' => date("Y-m-d H:i:s") )

        );

        DB::Table('cities')->insert($cities);

    }
}
