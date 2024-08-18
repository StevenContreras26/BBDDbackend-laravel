<?php

namespace App\Http\Resources\Article;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'family'=>$this->code,
            'caliber'=>'vacio',
            'conductor'=>'vacio',
            'apendix'=>'vacio',
            'description'=>'vacio',
            'extra'=>'vacio',
        ];
    }
}
