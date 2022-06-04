<?php

namespace App\Http\Controllers;

use App\Http\Resources\LibroCollection;
use App\Http\Resources\LibroResource;
use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Categoria;


class LibroController extends Controller
{
    protected $libro;

    public function __construct(Libro $libro)
    {
        $this->libro = $libro;
    }

    public function index()
    {   
        $longitud = count(Libro::all());
        $libros=array();

        for ($i=0; $i < $longitud; $i++) {

            $libros[$i] = new LibroResource(Libro::obtenerLibrosPorId($i+1));
        }

        $libros = array_reverse($libros);

        return view('home', ['libro' => $libros]);   
    }

    public static function search($info)
    {
        $longitud = count(Libro::all());
        $libros=array();

        for ($i=0; $i < $longitud; $i++) {

            $libros[$i] = new LibroResource(Libro::obtenerLibrosPorId($i+1));
        }

        $categorias = Categoria::all();

        return view('search', ['libro' => $libros, 'longitud' => $longitud, 'info' => $info, 'categorias' => $categorias]);  
    }

    public function editTitulo($titulo){
        $libro = $this->libro->obtenerLibrosPorTitulo($titulo);
        return view('libro.editar', ['libro' => $libro]);
    }

    public function edit($id){
        $libro = $this->libro->obtenerLibrosPorTitulo($id);
        return view('libro.editar', ['libro' => $libro]);
    }

    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);
        $libro->fill($request->all());
        $libro->save();
        return redirect()->action([LibroController::class, 'index']);
    }

    public function destroy($id)
    {
        $libro = Libro::find($id);
        $libro->delete();
        return redirect()->action([LibroController::class, 'index']);
    }
}