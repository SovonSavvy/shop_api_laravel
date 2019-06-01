<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name' => $this->name,
            'totalPrice' => (1 - ( $this->discount / 100) ) * $this->price,
            'rating' => $this->review->count() > 0 ? $this->review->sum('star')/$this->review->count() : 'No Rating yet',
            'discount' => $this->discount,
            'links' => [
                'single_product' => route('products.show',$this->id)
            ]
        ];
    }
}
