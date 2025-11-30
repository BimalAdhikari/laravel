<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanetController extends Controller
{
    // alle planeten
    public function index()
    {
        $planets = DB::table('planets')->get();

        // geef de planeten mee
        return view('planets.index', ['planets' => $planets]);
    }

    // pak het id dat in word meegegeven en laat alleen eentje tonen
    public function show($id) 
    {
        $planet = DB::table('planets')->where('id', $id)->first();

        // als de planeet niet bestaat gooi een error
        if (!$planet) {
            abort(404);
        }

        return view('planets.show', ['planet' => $planet]);
    }
}
