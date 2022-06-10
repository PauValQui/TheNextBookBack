<?php

namespace App\Http\Controllers;

use App\Http\Resources\LibroResource;
use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autor;
use App\Models\Valoracion;
class LibroController extends Controller
{
    protected $libro;

    public function __construct(Libro $libro)
    {
        $this->libro = $libro;
    }

    public function index() //funcion que me devuelve un array con un recurso de libros que he creado para que me muestre el nombre del autor y el tipo de categoria
    {                       //a la vista home
        $longitud = count(Libro::all());
        $libros=array();

        for ($i=0; $i < $longitud; $i++) {

            $libros[$i] = new LibroResource(Libro::obtenerLibrosPorId($i+1));
        }

        $libros = array_reverse($libros);

        return view('home', ['libro' => $libros]);   
    }

    public static function search($info) // funcion que me devuelve a la vista search la info recogida en la ruta, el array de libros, la cantidad de libros que hay
    {                                   //y todos los autores con su informacion.
        $longitud = count(Libro::all());
        $libros=array();

        for ($i=0; $i < $longitud; $i++) {

            $libros[$i] = new LibroResource(Libro::obtenerLibrosPorId($i+1));
        }

        $autores = Autor::all();

        return view('search', ['libro' => $libros, 'longitud' => $longitud, 'info' => $info, 'autores' => $autores]);
    }

    /*public static function searchLetras(Request $request){

        $libroBuscador = DB::table('libro')->where("titulo","like", "%".$request->texto."%")->get();
        $longitudBuscador = count($libroBuscador);
        return view('search');
    }*/

    public static function show($info){ //funcion que muestra un libro especifico, recoge las valoraciones de ese id de libro y la cantidad de valoraciones que hay

        $libros[0] = new LibroResource(Libro::obtenerLibrosPorId($info));

        $valoracion = Valoracion::where('libro_id', $info)
                                ->get();
        $longitud = count($valoracion);

        return view('view', ['libro' => $libros, 'info' => $info, 'valoracion' => $valoracion, 'longitud' => $longitud]);
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