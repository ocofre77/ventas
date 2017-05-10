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
            array('name'=> 'Llamada telefónica','icon'=>'fa fa-phone', 'created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Visita','icon'=>'fa fa-home','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Enviar correo','icon'=>'fa fa-envelope-o','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Venta cerrada','icon'=>'fa fa-hand-rock-o','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Campaña email intereses','icon'=>'fa fa-envelope-open-o','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Firma de contrato','icon'=>'fa fa-handshake-o','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Solicitud de contacto','icon'=>'fa fa-clipboard','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Contacto satisfecho','icon'=>'fa fa-file-text-o','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Valoración','icon'=>'fa fa-usd','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Propuesta','icon'=>'fa fa-comments','created_at'=>date("Y-m-d H:i:s")),
            array('name'=> 'Reserva','icon'=>'fa-thumbs-o-up','created_at'=>date("Y-m-d H:i:s")),

        ];

        DB::Table('task_types')->insert($task_types);

    }

}
