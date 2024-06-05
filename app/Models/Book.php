<?php

// app/Models/Book.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'isbn', 'publisher_id'];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
