<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RealisationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
      return [
           'id' => $this->id,
           'titre' => $this->titre,
           'description' => $this->descriptif,
           'date_debut' => $this->date_debut,
           'date_fin' => $this->date_fin
       ];
    }
}
