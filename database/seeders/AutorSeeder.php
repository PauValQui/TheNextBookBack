<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Autor;
class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autores=array("Marta Santés", "Penelope Ward", "Victoria Vílchez", "Tessa Bailey", "Julia Quinn", "Jennifer L. Armentrout"); 

        $n = count($autores);
        for($i=0;$i<$n;$i++){
            $autor = new Autor();
            $autor -> nombre = $autores[$i];
            $autor -> foto = ""+($i+1);
            $autor->save();
        }
    }
}
