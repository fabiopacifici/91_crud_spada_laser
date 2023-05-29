<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Lightsaber;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function sabers()
    {

        $sabers = Lightsaber::all();
        //dd($sabers);
        return view('lightsabers', compact('sabers'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lightsaber  $lightsaber
     * @return \Illuminate\Http\Response
     */
    public function saber(Lightsaber $lightsaber)
    {
        //dd($lightsaber);
        return view('lightsaber', compact('lightsaber'));
    }


    public function contacts()
    {
        return view('contacts');
    }
}
