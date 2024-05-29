<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class customerPrefernces extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this['id'],
            "customer_id" => $this['customer_id'],
            "notification_settings" => $this['notification_settings'],
            "language" => $this['language'],
            "currency" => $this['currency'],
            "created_at" => $this['created_at'],
    ];
    }
}
