<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    use HasFactory;

    protected $table = "valoracion";

    protected $fillable = ['titulo', 'puntuacion', 'comentario','libro_id'];
    protected $hidden = ['id'];

    public static function obtenerValoraciones(){
        return Valoracion::all();
    }

    public static function obtenerValoracionesPorLibro($libro_id)
    {
        return Valoracion::find($libro_id);
    }

    public function obtenerValoracionesPorId($id)
    {
        return Valoracion::find($id);
    }
}
