<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //

    public $movies=[
        [
            'id' => 1,
            'title' => 'Inception',
            'plot' => 'Persone che disturbano i sogni di altre persone',
            'director' => 'Christopher Nolan',
            'genre' => 'Fantascienza',
            'released_at' => 2010,
            'img' => '/img/inception.jpg'
            ],
            [
            'id' => 2,
            'title' => 'The Truman Show',
            'plot' => 'Il Grande Fratello senza il trash',
            'director' => 'Peter Weir',
            'genre' => 'Commedia',
            'released_at' => 1998,
            'img' => '/img/truman_show.jpg'
            ],
            [
            'id' => 3,
            'title' => 'John Wick',
            'plot' => 'Un sicario molto arrabbiato che fa a botte con la gente usando la matita',
            'director' => 'Chad Stahelski',
            'genre' => 'Azione',
            'released_at' => 2014,
            'img' => '/img/john_wick.jpg'
            ],
            [
            'id' => 4,
            'title' => 'The Godfather',
            'plot' => 'Boss della mala italiano radicato a Little Italy',
            'director' => 'Francis Ford Coppola',
            'genre' => 'Mafia',
            'released_at' => 1971,
            'img' => '/img/il_padrino.jpg'
            ],
            [
            'id' => 5,
            'title' => 'Pulp Fiction',
            'plot' => 'John Travolta ha dato vita a un meme',
            'director' => 'Quentin Tarantino',
            'genre' => 'Gangster',
            'released_at' => 1994,
            'img' => '/img/pulp_fiction.jpg'
            ],
            [
            'id' => 6,
            'title' => 'Il mondo dietro di te',
            'plot' => 'Apocalisse negli anni 2000,americani attaccatti da hacker israeliani ',
            'director' => 'Sam Esmail',
            'genre' => 'Suspense',
            'released_at' => 2003,
            'img' => '/img/ilmondodietrodite.jpg'
            ],
    

    ];

    public function movieIndex(){
        return view('movie-index',['movies'=>$this->movies]);
    }
}
