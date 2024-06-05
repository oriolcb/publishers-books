<?php

// database/seeders/PublishersTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublishersTableSeeder extends Seeder
{
    public function run()
    {
        Publisher::create(['name' => 'Publisher A']);
        Publisher::create(['name' => 'Publisher B']);
        // Afegir més editors si és necessari
    }
}
