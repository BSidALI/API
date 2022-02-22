<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {     // get all 
        // return parent::toArray($request);

        return [
            'name' => $this->name,
            'totale price '=>round((1-($this->discount)/100)*$this->price),
            // get relation that said 1 product -> have reviews in relation we do condition with $this->reviews->count()>0?
            'rating'=>$this->reviews->count()>0?round ($this->reviews->sum('star')/$this->reviews->count())
            // if connection is no
            :"noting rating yet",
            // now u can add extra work what will hapen and what this one can acc in same page
            // exp her u can add href link  who will have name and link to generat page link
            // this one is the name u will see in html
            'where i m '=> 'ProductCollection',
            'href' => [
                'Detail' => route('Products.show',$this->id)
            ]    
        ];
    }
}
