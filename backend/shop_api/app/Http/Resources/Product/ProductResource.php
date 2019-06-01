<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name' => $this->name,
            'detail' => $this->detail,
            'price' => $this->price,
            'discount' => $this->discount,
            'stock' => $this->stock == 0 ? 'Not In Stock' : $this->stock,
            'totalPrice' => (1 - ( $this->discount / 100) ) * $this->price,
            'rating' => $this->review->count() > 0 ? $this->review->sum('star')/$this->review->count() : 'No Rating yet',
            'links' => [
                'reviews' => route('reviews.index',$this->id)
            ]
        ];
    }
}
