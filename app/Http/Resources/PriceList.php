<?php

namespace App\Http\Resources;

use App\RoomType;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\RoomType as RoomTypeResource;

class PriceList extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'price' => $this->price,
            'room_type' => new RoomTypeResource(RoomType::findOrFail($this->room_type)),
        ];
    }
}
