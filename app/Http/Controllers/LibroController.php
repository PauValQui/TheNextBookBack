<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    protected $libro;

    public function __construct(Libro $libro)
    {
        $this->libro = $libro;
    }

    public function index()
    {
        $libro = $this->libro->obtenerLibros(); //retornamos un listado con todos los libros de la bd, para mostrarlos en la vista.
        
        $libros = LibroCollection($libro);

        return $libro;

        /*  $aux=0;
        $libros = array();

        foreach ($libro as $cadaLibro) {
            $autor = $this -> obtenerAutor($cadaLibro->autor_id)-> nombre;
            $autorFoto = $this -> obtenerAutor($cadaLibro->autor_id)-> foto;
            $categoria = $this -> obtenerCategoria($cadaLibro-> categoria_id);

            $libros[$aux]= [$cadaLibro->titulo, $cadaLibro->foto, $autor, $autorFoto, $categoria];
            $aux= $aux+1;
        }

        return view('home', $libros->toJson());*/
    }

    /*public function obtenerAutor($id){
        $autor = DB::table('autor')
        ->select('*')
        ->where('id', '=', $id)
        ->get();

        return $autor;
    }

    public function obtenerCategoria($id){
        $categoria = DB::table('categoria')
        ->select('tipo')
        ->where('id', '=', $id)
        ->get();

        return $categoria;
    }*/

    public function store(Request $request) //Este metodo crea un nuevo libro, $request tiene toda la informacion mandada desde un formulario.
    {
        $libro = new Libro($request->all()); // all() se encarga de cargar los datos al objeto $libro
        $libro->save(); //save() guardalos datos en la bd 
        return redirect()->action([LibroController::class, 'index']); //retorna la vista del listado de libros.
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