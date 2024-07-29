<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Books extends Model
{
    use HasFactory;

    protected $table = "books";

    protected $fillable = [
        'title', 'author', 'description', 'isbn', 'published-year',
    ];
}
