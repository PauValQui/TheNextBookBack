<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Autor;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('autor')->insert([
            'nombre'=> "Marta Santés",
            'foto'=>"Img\FotosAutores\autor1.jpg"
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Penelope Ward",
            'foto'=>"Img\FotosAutores\autor2.jpg"
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Victoria Vílchez",
            'foto'=>"Img\FotosAutores\autor3.jpg"
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Tessa Bailey",
            'foto'=>"Img\FotosAutores\autor4.jpg"
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Julia Quinn",
            'foto'=>"Img\FotosAutores\autor5.jpg"
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Jennifer L. Armentrout",
            'foto'=>"Img\FotosAutores\autor6.jpg"
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Elisabet Benavent",
            'foto'=>"Img\FotosAutores\autor7.jpg"
        ]);
    }
}
