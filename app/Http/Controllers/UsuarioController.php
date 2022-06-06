<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class UsuarioController extends Controller
{
    protected $usuario;

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    public function store(RegisterRequest $request)                                         
    //       mandada desde un formulario.
    {
        $usuario = new Usuario($request->validated()); 
        $usuario->save();                         
        return redirect('/home')-> with('success', "Account successfully registered.");
    }
    
    //No esta terminado el registro y el logeo

    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->action([UsuarioController::class, 'index']);
    }
}
