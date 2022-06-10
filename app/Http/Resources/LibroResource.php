<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\AutorResource;
use App\Http\Resources\CategoriaResource;

class LibroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    { //Recurso creado para la obtencion de un libro con los valores especificos que necesito para mostrar en mi aplicacion
        return [
            'id' => $this->id,
            'titulo'=> $this->titulo,
            'sinopsis'=> $this->sinopsis,
            'precio' => $this->precio,
            'foto'=> $this->foto,
            'autor'=> new AutorResource($this->autor),
            'categoria'=> new CategoriaResource($this -> categoria)
        ];
    }
}
