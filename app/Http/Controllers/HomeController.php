<?php

namespace App\Http\Controllers;

use App\Card;
use App\ListCard;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cardlists = ListCard::with('cards')->get();
        return view('app', compact('cardlists'));
    }
}
