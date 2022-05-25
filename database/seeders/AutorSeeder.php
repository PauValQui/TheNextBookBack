<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Autor;
use DB;

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
            'nombre'=> "Marta Santés"
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Penelope Ward"
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Victoria Vílchez"
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Tessa Bailey"
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Julia Quinn"
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Jennifer L. Armentrout"
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Elisabet Benavent"
        ]);
    }
}
