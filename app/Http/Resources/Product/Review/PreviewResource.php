<?php

namespace App\Http\Resources\Product\Review;

use App\Models\Reviews;
use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;
class PreviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
        'where i m '=> 'PreviewResource',
        
    ];
    }
}
