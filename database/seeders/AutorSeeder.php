<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autor = array(
            ['nombre' => "Marta Santés", 'foto' =>""],
            ['nombre' => "Penelope Ward"],
            ['nombre' => "Victoria Vílchez"],
            ['nombre' => "Tessa Bailey"],
            ['nombre' => "Julia Quinn"],
            ['nombre' => "Jennifer L. Armentrout"]
        );

        $n = count($autor);
        for($i=0;$i<$n;$i++){
            DB::table('autor')->insert($autor[$i]);
        }
    }
}
