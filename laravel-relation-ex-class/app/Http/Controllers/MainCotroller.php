<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;
use App\Models\PersonDetail;
use App\Models\Post;

class MainCotroller extends Controller
{
    public function home() {
        $people = Person :: all();
        return view('pages.home', compact('people'));
    }
}
