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

    public function store(Request $request) //     Este metodo crea un nuevo libro, $request tiene toda la informacion                                        
     //       mandada desde un formulario.
    {
        $request->validate([
            'nombre' => 'required|min:3', 
            'apellido' => 'required|min:3',
            'nombreUsuario' => 'required|min:5',
            'email' => 'required | email | unique:usuarios', 
            'password' => 'required | confirmed|min:8',
            'password_confirmation' => 'required|min:8'
        ]);

        $usuario = new Usuario;
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->nombreUsuario = $request->nombreUsuario;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->password_confirmation = $request->password_confirmation;

        $usuario->save();
        return back()->with('success', 'Formulario validado.');


    }

    public function login(Request $request){

       

        if (Auth::attempt(['nombreUsuario' => $request['nombreUsuario'], 'password' =>$request['password']])) {
            // Authentication passed...
            return redirect()->view('home');
        }
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->action([UsuarioController::class, 'index']);
    }
}
