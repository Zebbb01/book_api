<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'title',
        'description',
        'isbn',
        'published_year',
        'price'
    ];

    // Each book belongs to one author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}