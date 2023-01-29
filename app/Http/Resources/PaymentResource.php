<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    public static $wrap = 'payment';
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'payee' => $this->payee,
            'sum' => $this->sum,
            'purpose' => $this->purpose,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
