<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = array(
            ['tipo' -> Romantica],
            ['tipo' -> Fantasia],
            ['tipo' -> Juvenil],
            ['tipo' -> Historica]
        );

        $n = count($categorias);
        for($i=0;$i<$n;$i++){
            DB::table('categoria')->insert($categorias[$i]);
        }
    }
}
