<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;

class GamesController extends Controller
{
    //
    public function index() {
       
        //$videogames = array('Fifa22', 'NBA23', 'Mario Kart', 'Mario Party');
        $videogames = Videogame::All();
        return view('index', ['games'=>$videogames]);
        //dd($videogames); //como console.log de JS
    }

    public function create() {
       
        return view('create');
    }

    public function help($name_game, $categoria = null){
        
        $date = Now();
        return view('show', ['nameVideoGame'=>$name_game, 'categoryGame'=>$categoria, 'fecha'=>$date]);

    }
}
