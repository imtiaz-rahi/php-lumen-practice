<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run()
    {
        $authors = Author::factory()->count(10)->create();
    }
}
