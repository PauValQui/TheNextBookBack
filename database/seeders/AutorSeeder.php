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
            'foto'=>""
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Penelope Ward",
            'foto'=>""
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Victoria Vílchez",
            'foto'=>""
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Tessa Bailey",
            'foto'=>""
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Julia Quinn",
            'foto'=>""
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Jennifer L. Armentrout",
            'foto'=>""
        ]);
        DB::table('autor')->insert([
            'nombre'=> "Elisabet Benavent",
            'foto'=>""
        ]);
    }
}
