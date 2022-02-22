<?php

namespace App\Http\Resources\Product\Review;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [ 'id' => $this->id,
        'product_id'=> $this->product_id,
        'customer' => $this->customer,
        'body' => $this->review,
        'star' => $this->star,
        'where i m '=> 'ReviewCollection',
        'href' => [
            'Detail' => route('reviews.show',$parameters = array($p_id = $this->product_id, $Rid = $this->id))
        ]  
    ];
    }
}
