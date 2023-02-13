<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// richiamo nel seeder sia il model Person sia il model PersonDetail essendo tabelle collegate
use App\Models\Person;
use App\Models\PersonDetail;




class PersonDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // richiamo tutti gli elementi della table people, e ciclando su essi gli faccio assegnare una volta creati col make() gli elementi della table person_details
        Person:: all() -> each(function($p){

            $pd = PersonDetail :: factory() -> make();
            $pd -> person() -> associate($p);

            $pd -> save();
        });
    }
}
