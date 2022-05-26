import React from 'react';
import './Footer.scss';
import logo from '../../Img/Logo.jpeg';
import {FaInstagram, FaFacebook, FaGoodreads} from 'react-icons/fa';

export default function Footer() {
  return (
    <div className="Footer">
        <div className="Footer__Box">
            <img src={logo} alt='Logo' id='Logo' className='Footer__Box__Logo'/>
            <div className='Footer__Box__Contact'>
                <p>¿Tienes alguna duda?</p>
                <a href='/'>Contactanos</a>
            </div>
            <div className='Footer__Box__RRSS'>
                <p>Siguenos en nuestras redes sociales:</p>
                <div className='RRSS__BoxIcon'>
                    <i className='BoxIcon__Icon' aria-hidden="true"><FaInstagram className='fa-2'/></i>
                    <i className='BoxIcon__Icon' aria-hidden="true"><FaFacebook className='fa-2'/></i>
                    <i className='BoxIcon__Icon' aria-hidden="true"><FaGoodreads className='fa-2'/></i>
                </div>
            </div>
        </div>
        <div className="Footer__Copyright">
            <p>Copyright 2022</p>
        </div>
    </div>
  )
}

if (document.getElementById('Footer')) {
    ReactDOM.render(<Footer />, document.getElementById('Footer'));
}