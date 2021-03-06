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

    public function index($libro_id) //funcion que me devuelve las valoraciones de un libro especifico
    {  
        $valoracion = Valoracion::where('libro_id', $libro_id)
                                ->get();
        $longitud = count($valoracion);
        return view('view', ['valoracion' => $valoracion, 'longitud' => $longitud]);
    }

    public function store(Request $request) //     Este metodo crea una nueva valoracion, $request tiene toda la informacion                                        
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
        return back();

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
