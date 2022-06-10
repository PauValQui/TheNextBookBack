<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AutorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {   //Recurso creado para la obtencion de un autor con los valores especificos que necesito para mostrar en mi aplicacion
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'foto' => $this->foto
        ];
    }
}
