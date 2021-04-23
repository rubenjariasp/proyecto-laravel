<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inputs')->insert([
            'category_id'=>1,
            'title'=>'De Jong remonta su extraño duelo de con Fede Valverde',
            'description'=> 'En enero de 2019, Fede Valverde era el jugador fetiche del Real Madrid. Había sido el mejor jugador de la final de la Supercopa y estaban en un momento álgido. Es entonces cuando las comparaciones con Frenkie de Jong afloraban. Se solía comparar los 5M de euros que había desembolsado el Real Madrid por lo 80M que invirtió el Barça en un jugador que estaba rindiendo menos....
',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('inputs')->insert([
            'category_id'=>2,
            'title'=>'El conjuro',
            'description'=> 'es una serie de películas de terror, distribuidas por la división New Line Cinema de Warner Bros. Pictures. Las películas presentan una toma de ficción sobre los casos de la vida real de Ed y Lorraine Warren, investigadores paranormales y autores asociados con casos importantes pero controvertidos. La saga principal del universo, The Conjuring, sigue sus intentos de ayudar a las personas que se encuentran poseídas por espíritus demoníacos, mientras que el resto de películas son spin-off que se centran en los orígenes de algunas de las entidades que los Warren han encontrado',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
