<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::Table('permissions')->delete();

        $states = array(

            array(
                'name'=> 'Gerente',
                'display_name'=>'Gerente',
                'description'=>'Tiene permiso para acceder a todos los datos y a la configuración' ,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ),

            array(
                'name'=> 'Comercial',
                'display_name'=>'Comercial',
                'description'=>'Puede acceder a todos los inmuebles, contactos y a su agenda' ,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ),


            array(
                'name'=> 'Vendedor',
                'display_name'=>'Vendedor',
                'description'=>'Puede ver todos los inmuebles y sus propios contactos y agenda.' ,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ),


            array(
                'name'=> 'Captador',
                'display_name'=>'Captador',
                'description'=>'Puede gestionar sus propio inmuebles, contactos y agenda.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ),


        );


        DB::Table('permissions')->insert($states);



    }
}
