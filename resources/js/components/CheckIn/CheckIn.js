import React from 'react'
import './CheckIn.scss'

export default function Check() {
  return (
    

<div className="Check">
<form className="Check__Form">
    <div className="Check__Form__Datos">
        <p>Nombre:</p>
        <input type='text' className="Check__Form__Datos__Box" />
    </div>
    <div className="Check__Form__Datos">
        <p>Apellido:</p>
        <input type='text' className="Check__Form__Datos__Box" />
    </div>
    <div className="Check__Form__Datos">
        <p>Nombre de Usuario:</p>
        <input type='text' className="Check__Form__Datos__Box" />
    </div>
    <div className="Check__Form__Datos">
        <p>Contraseña:</p>
        <input type='text' className="Check__Form__Datos__Box" />
    </div>
    <div className="Check__Form__Datos">
        <p>Repetir contraseña:</p>
        <input type='text' className="Check__Form__Datos__Box" />
    </div>
    
    <div className="Check__Form__Boton">
        <button className="Check__Form__Boton__Foto">Añadir foto de perfil</button>
    </div>
    
    <div className="Check__Form__Boton">
        <button className="Check__Form__Boton__Enviar">Iniciar Sesión</button>
    </div>
</form>
</div>
  )
}

if (document.getElementById('Check')) {
    ReactDOM.render(<Check />, document.getElementById('Check'));
}