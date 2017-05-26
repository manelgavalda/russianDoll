<?php

namespace App\Http\Controllers;

use App\Card;

class CardsController extends Controller
{
    public function index()
    {

//        $cards= Cache::remember('notes',5, function () {
//            return Card::with('notes')->get();
//        });
        $cards = Card::with('notes')->get();
        return view('cards.index', compact('cards'));
    }
}
