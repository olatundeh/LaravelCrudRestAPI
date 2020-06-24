<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['name', 'isbn','authors', 'number_of_pages', 'publisher', 'country', 'release_date'];
    protected $casts = ['authors' => 'array'];
}
