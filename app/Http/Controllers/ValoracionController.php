<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Valoracion;

class ValoracionController extends Controller
{
    protected $valoracion;

    public function __construct(Valoracion $valoracion)
    {
        $this->valoracion = $valoracion;
    }

    public function index($libro_id)
    {
        $valoracion = $this->valoracion->obtenerValoracionPorLibro($libro_id); //retornamos un listado con todos los libros de la bd, para mostrarlos en la vista.
        return view('valoracion.lista', ['valoracion' => $valoracion]);
    }

    public function store(Request $request) //     Este metodo crea un nuevo libro, $request tiene toda la informacion                                        
     //       mandada desde un formulario.
    {
        $request->validate([
            'titulo' => 'required',
            'puntuacion' => 'required',
            'comentario' => 'required',
            'libro_id' => 'required',
        ]);

        $valoracion = new Valoracion;
        $valoracion->titulo = $request->titulo;
        $valoracion->puntuacion = $request->puntuacion;
        $valoracion->comentario = $request->comentario;
        $valoracion->libro_id = $request->libro_id;
        

        $valoracion->save();
        return back()->with('success', 'Valoracion enviada.');

    }
    

    /*public function show($libro_id){
        $valoracion = $this->valoracion->obtenerValoracionPorTitulo($libro_id);
        return view('valoracion.ver', ['valoracion' => $valoracion]);
    }*/

    public function edit($id){
        $valoracion = $this->valoracion->obtenerValoracionPorId($id);
        return view('valoracion.editar', ['valoracion' => $valoracion]);
    }

    public function update(Request $request, $id)
    {
        $valoracion = Valoracion::find($id);
        $valoracion->fill($request->all());
        $valoracion->save();
        return redirect()->action([ValoracionController::class, 'index']);
    }

    public function destroy($id)
    {
        $valoracion = Valoracion::find($id);
        $valoracion->delete();
        return redirect()->action([ValoracionController::class, 'index']);
    }
}
