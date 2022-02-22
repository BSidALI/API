<?php

namespace App\Http\Resources\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->detail,
            'price' => $this->price,
            'stock' =>  $this->stock,
            'discount' =>$this->discount,
            // get relation that said 1 product -> have reviews in relation
            'rating'=>$this->reviews->sum('star')/$this->reviews->count(),
            // now u can add extra work what will hapen and what this one can acc in same page
            // exp her u can add href link  who will have name and link to generat page link
            // this one is the name u will see in html
            'href' => [
                'reviews' => route('reviews.index',$this->id)
            ]    
        ];
    }
}