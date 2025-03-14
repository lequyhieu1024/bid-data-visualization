<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SelectionMethodCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->map(function ($selectionMethod) {
                return [
                    'id' => $selectionMethod->id,
                    'method_name' => $selectionMethod->method_name,
                    'description' => $selectionMethod->description,
                    'is_active' => $selectionMethod->is_active,
                    'created_at' => $selectionMethod->created_at,
                    'updated_at' => $selectionMethod->updated_at,
                ];
            }),
            'total_elements' => $this->total(),
            'total_pages' => $this->lastPage(),
            'page_size' => $this->perPage(),
            'number_of_elements' => $this->count(),
            'current_page' => $this->currentPage(),
        ];
    }
}
