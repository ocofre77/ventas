<?php

use Illuminate\Database\Seeder;

class TaskTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        DB::Table('task_types')->delete();

        $task_types = [
            array('name'=> 'Llamada telefónica','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Visita','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Enviar correo','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Venta cerrada','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Campaña email intereses','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Firma de contrato','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Solicitud de contacto','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Contacto satisfecho','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Valoración','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Propuesta','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Reserva','created_at'=>date("Y-m-d H:i:s")),

        ];

        DB::Table('task_types')->insert($task_types);

    }

}
