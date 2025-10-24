<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'isbn' => $this->isbn,
            'published_year' => $this->published_year,
            'price' => $this->price,
            'author' => new AuthorResource($this->whenLoaded('author')),
            'created_at' => $this->created_at->toDateTimeString(),
        ];
    }
}