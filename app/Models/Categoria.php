<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = "categoria";

    protected $fillable = ['tipo', 'descripcion', 'libro_id'];
    protected $hidden = ['id'];

    public function obtenerCategorias()
    {
        return Categoria::all();
    }

    public function obtenerCategoriasPorTipo($tipo)
    {
        return Categoria::find($tipo);
    }

    public function obtenerCategoriasPorId($id)
    {
        return Categoria::find($id);
    }

    public function libros(){
        return $this->hasMany(Libro::class);
    }
}
