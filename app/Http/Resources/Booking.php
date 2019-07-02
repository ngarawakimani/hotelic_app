<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Booking extends JsonResource
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

        'room_id' => RoomResource::collection($this->room_id),
        'date_start' => $this->date_start,
        'date_end' => $this->date_end,
        'customer_fullname' => $this->customer_fullname,
        'customer_email' => $this->customer_email,
        'total_nights' => $this->total_nights,
        'total_price' => $this->total_price,
        'user_id' => UserResource::collection($this->user_id),
        ];
    }
}
