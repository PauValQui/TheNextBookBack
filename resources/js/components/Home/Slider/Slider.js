import React, {useRef, useEffect} from 'react'
import './Slider.scss'
import Imagen1 from '../../../Img/Slider1.png';
import Imagen2 from '../../../Img/Slider2.png';
import Imagen3 from '../../../Img/Slider3.png';
import Imagen4 from '../../../Img/Slider4.png';
import Imagen5 from '../../../Img/Slider5.png';

import {ReactComponent as FlechaIzquierda} from '../../../Img/iconmonstr-arrow-left.svg'
import {ReactComponent as FlechaDerecha} from '../../../Img/iconmonstr-arrow-right.svg'

const Slider = () =>  {
    const slide = useRef(null);
    const intervaloSlider = useRef(null);

    const siguiente = () => {
        //Compruebo que el slide tenga elementos
        if(slide.current.children.length > 0){
            //Busco el primer elemento del slide
            const primerElemento = slide.current.children[0];

            //Le doy la transicion
            slide.current.style.transition = `1ms ease-out all`;

            const tamañoSlide = slide.current.children[0].offsetWidth;

            //Muevo el slide
            slide.current.style.transform = `translateX(-${tamañoSlide}px)`;

            const transicion = () => {
				// Reiniciamos la posicion del Slideshow.
				slide.current.style.transition = 'none';
				slide.current.style.transform = `translateX(0)`;

				// Tomamos el primer elemento y lo mandamos al final.
				slide.current.appendChild(primerElemento);

				slide.current.removeEventListener('transitionend', transicion);
			}

			// addEventlistener para cuando termina la animacion.
			slide.current.addEventListener('transitionend', transicion);
        }
    }

    const anterior = () => {
        if (slide.current.children.length>0){
            //Obtengo el tamaño del slide 
            const tamaño = slide.current.children.length-1;
            //busco el ultimo elemento del slide
            const ultimoElemento = slide.current.children[tamaño]
            //Insertamos el ultimo elemento en el primero para volver al anterior
            slide.current.insertBefore(ultimoElemento, slide.current.firstChild)
            
            slide.current.style.transition='none';
            const tamañoSlide = slide.current.children[0].offsetWidth;
            //Muevo el slide
            slide.current.style.transform = `translateX(-${tamañoSlide}px)`;


            setTimeout(() => {
                slide.current.style.transition=`1ms ease-out all`;
                slide.current.style.transform = `translateX(0)`;

            },30);
        }
    }

    useEffect(() => {
        intervaloSlider.current = setInterval(() => {
            siguiente();
        }, 5000);

        //Elimino intervalos
        slide.current.addEventListener('mousseenter', ()=>{
            clearInterval(intervaloSlider.current);
        })

        
    }, []);

  return (
    <div className="Slider">
      <div className="Slider__ContenedorSlider" ref={slide}>
          <div className="Slider__ContenedorSlider__Slider">
            <a href="" className="Slider__Enlace">
              <img src={Imagen1} alt="Img1" className="ImagenSlider"/>
            </a>
          </div>
          <div className="Slider__ContenedorSlider__Slider">
            <a href="" className="Slider__Enlace">
              <img src={Imagen2} alt="Img2" className="ImagenSlider"/>
            </a>
          </div>
          <div className="Slider__ContenedorSlider__Slider">
            <a href="" className="Slider__Enlace">
              <img src={Imagen3} alt="Img3" className="ImagenSlider"/>
            </a>
          </div>
          <div className="Slider__ContenedorSlider__Slider">
            <a href="" className="Slider__Enlace">
              <img src={Imagen4} alt="Img4" className="ImagenSlider"/>
            </a>
          </div>
          <div className="Slider__ContenedorSlider__Slider">
            <a href="" className="Slider__Enlace">
              <img src={Imagen5} alt="Img5" className="ImagenSlider"/>
            </a>
          </div>
        </div>
        <div className="Slider__Controles">
          <button className="Slider__Controles__Boton Boton--Izquierdo" onClick={anterior}>
            <FlechaIzquierda />
          </button>

          <button className="Slider__Controles__Boton Boton--Derecho" onClick={siguiente}>
            <FlechaDerecha />
          </button>
        </div>
    </div>
  )
}

export default Slider
