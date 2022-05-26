import React from 'react'
import './Home.scss';
import Slider from './Slider/Slider.js'

export default function Home() {
  return (
    <div className="Home">
        <Slider />
    </div>
  )
}

if (document.getElementById('Home')) {
  ReactDOM.render(<Home />, document.getElementById('Home'));
}
