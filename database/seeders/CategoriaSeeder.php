<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categoria')->insert([
            'tipo'=>"Romantica"
        ]);
        DB::table('categoria')->insert([
            'tipo'=>"Fantasia"
        ]);
        DB::table('categoria')->insert([
            'tipo'=>"Juvenil"
        ]);
        DB::table('categoria')->insert([
            'tipo'=>"Historica"
        ]);
    }
}
