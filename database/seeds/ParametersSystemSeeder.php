<?php

use Illuminate\Database\Seeder;

class ParametersSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parameters_system')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        

            $parameters =[ 
            ['id' => 1 , 'code'=>1,		'name' => 'payment_method_paths' ,		'value' =>'image/type_paiments/', 		'description'=>'path imagenes de tipos de pagos', 'status'=>'1' ],
            ['id' => 2,  'code'=>2,		'name' => 'profile_paths' ,				'value' =>'image\\profiles\\', 			'description'=>'directorio de imagenes de perfiles de la pagina', 'status'=>'1' ]
        ];



        foreach($parameters as $parameter)
            {
               DB::table('parameters_system')->insert($parameter);
            }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
