<?php

namespace App\Http\Resources\Api\BackOffice;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrdersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "status" => $this->status,
            "national_code" => $this->national_code,
            "amount" => $this->amount,
            "created_at" => $this->created_at,
            "updated_at" => $this->update_at,
        ];
    }
}
