<?php

namespace Seat\Api\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UniverseStructureResource extends Resource
{

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        $definition = parent::toArray($request);

        array_forget($definition, 'structure_id');

        return parent::toArray($request);
    }
}
