import React from 'react'
import './Header.scss';
import logo from '../../Img/LogoRedimensionado.jpeg'
import {NavLink} from 'react-router-dom';
import {BsCart3} from "react-icons/bs";
import {IoSearchCircle} from "react-icons/io5";


export default function Header() {
  return (
    <div className="Header">
        <div className="Header__FirstBox">
            <img src={logo} alt="logo" id="logo" className="Header__FirstBox__logo" />
            <div className="Header__FirstBox__Search">
              <input type="text" className="Search__Box" name='Search__Box' placeholder="¿Qué buscas?"/>
              <i className="BoxIcon__Icon" aria-hidden="true"><IoSearchCircle className='io-2' /></i>
            </div>
            <div className="Header__FirstBox__ShopCart">
            <i className="ShopCart_Box" aria-hidden="true"><BsCart3 className="bs-3"/></i>
            </div>
        </div>
        <div className="Header__NavBar">
          <ul className="Header__NavBar__ul">
            <li>
              <NavLink to='/Buscador'>Libros</NavLink>
            </li>
            <li>
              <NavLink to='/Autores'>Autores</NavLink>
            </li>
            <li>
              <NavLink to='/Contacto'>Contacto</NavLink>
            </li>
          </ul>

          <button className="Header__NavBar__BotonInicio">
            <NavLink to='/Login' className="Header__NavBar__BotonInicio__Enlace">Inicio Sesión</NavLink>
          </button>
        </div>
    </div>
  )
}

if (document.getElementById('Header')) {
  ReactDOM.render(<Header />, document.getElementById('Header'));
}