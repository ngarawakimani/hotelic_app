<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Hotel;
use App\RoomType;
use App\Http\Resources\Hotel as HotelResource;
use App\Http\Resources\RoomType as RoomTypeResource;

class Room extends JsonResource
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
            'id' => $this->id,
            'room_name' => $this->room_name,
            'hotel' => new HotelResource(Hotel::findOrfail($this->hotel_id)),
            'room_type' => new RoomTypeResource(RoomType::findOrfail($this->room_type)),
            'room_image' => $this->room_image,
        ];
    }
}
