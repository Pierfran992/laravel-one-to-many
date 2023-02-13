<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// richiamo sia il model Person sia il model Post
use App\Models\Person;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*faccio generare 100 post con dati fake con l'utilizzo del make in modo tale che non vengano caricati immediatamente nel db e poi
        eseguo tanti cicli quanti sono i post dove ad ogni ciclo prendo la table people la riordino il modo casuale e seleziono il primo
        elemento della table risultante a cui vado a collegare un post */

        Post:: factory() -> count(100) -> make() -> each(function($p){

            $person = Person :: inRandomorder() -> first();

            $p -> person() -> associate($person);
            $p -> save();

        });

    }
}
