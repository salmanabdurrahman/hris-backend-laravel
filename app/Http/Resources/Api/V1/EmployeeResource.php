<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'image' => $this->image ? Storage::disk('public')->url($this->image) : null,
            'name' => $this->name,
            'phone' => $this->phone,
            'position' => $this->position,
            'division' => new DivisionResource($this->whenLoaded('division')),
        ];
    }
}
