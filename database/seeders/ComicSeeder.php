<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('fumetti_db');

        foreach ($comics as $comic_item) {
            $comic = new Comic();

            $comic->immagine = $comic_item['thumb'];
            $comic->titolo = $comic_item['title'];
            $comic->serie = $comic_item['series'];
            $comic->data_di_vendita = $comic_item['sale_date'];
            $comic->prezzo = $comic_item['price'];
            $comic->descrizione = $comic_item['description'];

            $comic->save();
        }
    }
}
