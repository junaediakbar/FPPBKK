<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ThirdPaymentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'T_id' => $this->T_id,
            'T_nama' => $this->T_nama,
            'T_nomor' => $this->T_nomor,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
