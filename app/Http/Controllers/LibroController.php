<?php

namespace App\Http\Controllers;

use App\Http\Resources\LibroCollection;
use App\Http\Resources\LibroResource;
use Illuminate\Http\Request;
use App\Models\Libro;


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

        /*
        $alumnos = $this->alumnos->obtenerAlumnos();
        return view('alumnos.lista', ['alumnos' => $alumnos]);
        
        $aux=0;
        $libros = array();
        $data=[];

        foreach ($libro as $cadaLibro) {
            $autor = $this -> obtenerAutor($cadaLibro->autor_id);
            $categoria = $this -> obtenerCategoria($cadaLibro-> categoria_id);

            $data[$aux]= [
                'titulo' => $cadaLibro->titulo, 
                'foto' =>$cadaLibro->foto, 
                'autor' =>$autor->nombre, 
                'categoria' =>$categoria
            ];
            $aux= $aux+1;
        }

        return view('home', $libros->toJson());
        return view('home', response()->json($data, 200, [])); */    
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