<?php

// database/seeders/BooksTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        Book::create(['title' => 'Book 1', 'isbn' => '1234567890', 'publisher_id' => 1]);
        Book::create(['title' => 'Book 2', 'isbn' => '0987654321', 'publisher_id' => 2]);
        // Afegir més llibres si és necessari
    }
}
