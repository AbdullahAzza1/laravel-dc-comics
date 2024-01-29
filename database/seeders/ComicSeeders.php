<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\comic;

class PastaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_comic = config("comic");

        foreach ($array_comic as $comic_item) {
            $nuova_comic = new comic();
            $nuova_comic->title = $comica_item["titolo"];
            $nuova_comic->description = $comic_item["descrizione"];
            $nuova_comic->type = $comic_item["tipo"];
            $nuova_comic->image = $comic_item["src"];

            $nuova_comic->save();
        }
    }
}
