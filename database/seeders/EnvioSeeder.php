<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Envio;

class EnvioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            array('mes'=>'Enero', 'cantidad'=> 10),
            array('mes'=>'Febrero', 'cantidad'=> 80),
            array('mes'=>'Marzo', 'cantidad'=> 40),
            array('mes'=>'Abril', 'cantidad'=> 30 ),
            array('mes'=>'Mayo', 'cantidad'=> 20),
            array('mes'=>'Junio', 'cantidad'=>56),
            array('mes'=>'Julio', 'cantidad'=> 60),
            array('mes'=>'Agosto', 'cantidad'=> 45),
            array('mes'=>'Septiembre', 'cantidad'=> 30),
            array('mes'=>'Octubre', 'cantidad'=> 60),
            array('mes'=>'Noviembre', 'cantidad'=> 80),
            array('mes'=>'Diciembre', 'cantidad'=> 10),

        ];
        Envio::insert($data);
    


    }
}
