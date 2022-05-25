<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias=array('Romantica', 'Fantasia', 'Juvenil', 'Historica'); 

        $n = count($categorias);
        for($i=0;$i<$n;$i++){
            $categoria = new Categoria();
            $categoria -> tipo = $categoria[$i];
            $categoria->save();
        }
    }
}
