<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{
    public function player(){

        $players = Player::all();

        return view('player', compact('players'));
    
    }
}
