<?php

use App\Models\Movie;
use Illuminate\Database\Seeder;

class movieSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Movie::insert([
            'name' => 'Buscando a nemo',
            'description' => 'Es muy buena'
        ]);
        Movie::insert([
            'name' => 'John Wick',
            'description' => 'Es el mas perron'
        ]);
    }
}
