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
        $usuario = new Usuario($request->all());  //all()-> se encarga de cargar los datos al objeto $libro
        $usuario->save();                         //save()-> guardalos datos en la bd 
        return redirect()->action([UsuarioController::class, 'index']); //retorna la vista del listado de libros.
    }
    

    public function showRegister(){
        if(Auth::check()){
            return redirect()->route('home.index');
        }
        return view('checkin');
    }

    public function register(RegisterRequest $request){
        
        $usuario = Usuario::create($request->validated());
        auth()->login($usuario);
        return redirect('/home')->with('success', "Account successfully registered.");
        /*
        $user = new User;
         $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->setPassword($request->password);
        $user->save();
        return redirect('/asdasd')->with('success', "Account successfully registered."); */

    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        
        if(!Auth::validate($credentials)):
            dd('error');
           return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;
        $usuario = Auth::getProvider()->retrieveByCredentials($credentials);
        

        Auth::login($usuario);

        return $this->authenticated($request, $usuario);
    }

    protected function authenticated(Request $request, $usuario) 
    {
        return redirect()->route('home.index');
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->action([UsuarioController::class, 'index']);
    }
}
