<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'id' => $this->id,
            'path' => $this->path,
            'created_at' => $this->created_at, //->diffForHumans()
            'updated_at' => $this->updated_at,
        ];
    }
}
