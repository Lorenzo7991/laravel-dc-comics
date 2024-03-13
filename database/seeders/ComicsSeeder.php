<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comicData) {
            $comic = new Comic();


            foreach ($comicData as $key => $value) {
                $comic->$key = $value;
            }
            $comic->artists = implode(', ', $comicData['artists']);
            $comic->writers = implode(', ', $comicData['writers']);

            $comic->save();
        }
    }
}
