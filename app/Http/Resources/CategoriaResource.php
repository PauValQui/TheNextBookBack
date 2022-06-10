<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {   //Recurso creado para la obtencion del tipo de la categoria que necesito para mostrar en mi aplicacion
        return [
            'tipo' => $this -> tipo
        ];
    }
}
