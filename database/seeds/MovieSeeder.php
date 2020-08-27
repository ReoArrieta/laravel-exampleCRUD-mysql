<?php

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
