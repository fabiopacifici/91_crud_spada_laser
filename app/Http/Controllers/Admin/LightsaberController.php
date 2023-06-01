<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lightsaber;
use Illuminate\Http\Request;

class LightsaberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sabers = Lightsaber::orderByDesc('id')->get();
        //dd($sabers);
        return view('admin.lightsabers.index', compact('sabers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lightsabers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump the whole request
        //dd($request->all());
        $val_data = $request->validate([
            'name' => 'required|min:5|max:50',
            'image' => 'nullable|max:255',
            'price' => 'nullable',
            'description' => 'nullable'
        ]);
        //dd($val_data);
        // TODO: validate the request fields

        // create a new instance
        $saber = new Lightsaber();
        // save the fileds
        $saber->name = $request->name;
        $saber->image = $request->image;
        $saber->price  = $request->price;
        $saber->description = $request->description;
        $saber->save();


        // return to a get route POST/REDIRECT/GET
        return to_route('lightsabers.index')->with('message', 'Lightsaber created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lightsaber  $lightsaber
     * @return \Illuminate\Http\Response
     */
    public function show(Lightsaber $lightsaber)
    {
        return view('admin.lightsabers.show', compact('lightsaber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lightsaber  $lightsaber
     * @return \Illuminate\Http\Response
     */
    public function edit(Lightsaber $lightsaber)
    {
        return view('admin.lightsabers.edit', compact('lightsaber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lightsaber  $lightsaber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lightsaber $lightsaber)
    {
        //dd($request->all(), $lightsaber);

        // Validate data
        $val_data = $request->validate([
            'name' => 'required|min:5|max:50',
            'image' => 'nullable|max:255',
            'price' => 'nullable',
            'description' => 'nullable'
        ]);
        //dd($val_data);
        /*
        $data = [
            'name' => $request->name,
            'image' => $request->image,
            'price' => $request->price,
            'in_stock' => $request->in_stock,
            'description' => $request->description
        ]; */
        $lightsaber->update($val_data);

        return to_route('lightsabers.index')->with('message', "Lightsaber: $lightsaber->name updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lightsaber  $lightsaber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lightsaber $lightsaber)
    {
        //
        $lightsaber->delete();
        return to_route('lightsabers.index')->with('message', "Lightsaber deleted successfully");
    }
}
