import React from 'react'
import './login.scss'

export default function Login() {
  return (
    <div className="Login">
        <form className="Login__Form">
            <div className="Login__Form__Datos">
                <p>Nombre de Usuario:</p>
                <input type='text' className="Login__Form__Datos__Box" />
            </div>
            <div className="Login__Form__Datos">
                <p>Contraseña:</p>
                <input type='text' className="Login__Form__Datos__Box" />
            </div>
            <div className="Login__Form__Check">
                <input type='checkbox' className='Login__Form__Check__CheckBox' />
                <p>Recordar Contraseña</p>
            </div>
            <div className="Login__Form__Enlace">
                <p>¿No tienes cuenta? <a href="/Registrarse" className="Login__Form__Enlace__Registro">Registrate aquí</a></p>
            </div>
            <div className="Login__Form__Boton">
                <button className="Login__Form__Boton__Enviar">Iniciar Sesión</button>
            </div>
        </form>
    </div>
  )
}

if (document.getElementById('Login')) {
    ReactDOM.render(<Login />, document.getElementById('Login'));
}