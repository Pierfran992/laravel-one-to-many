<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // creo la funzione per collegare la table posts con la table people
    public function person() {
        return $this -> belongsTo(Person::class);
    }
}
