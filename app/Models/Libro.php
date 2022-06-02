<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Libro extends Model
{
    use HasFactory;

    protected $table = "libro";

    protected $fillable = ['titulo', 'sinopsis', 'precio', 'foto', 'categoria_id', 'autor_id'];
    protected $hidden = ['id'];

    public static function  obtenerLibros()
    {
        return Libro::all();
    }

    public static function obtenerNovedades(){
        $novedades = DB::table('libro')
        ->select('titulo', 'foto')
        ->orderBy('created_at', $direction='desc')
        ->get();

        return $novedades;
    }

    public static function obtenerLibrosPorId($id)
    {
        return Libro::find($id);
    }

    public function obtenerLibrosPorAutor($autor_id)
    {
        return Libro::find($autor_id);
    }

    public function obtenerLibrosPorCategoria($categoria_id)
    {
        return Libro::find($categoria_id);
    }

    public function autor(){
        return $this->belongsTo(Autor::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
