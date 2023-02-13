<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    // creo la funzione per generare il tipo di relazione tra la table people e quella personDetail
    public function personDetail() {
        return $this -> hasOne(PersonDetail::class);
    }

    // creo la funzione per generare il tipo di relazione tra la table people e quella posts
    public function posts() {
        return $this -> hasMany(Post::class);
    }
}
