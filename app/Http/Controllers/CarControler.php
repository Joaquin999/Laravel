<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class CarControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $car = Car::All();
        return view('cars.index', array('car' => $car));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cars.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $coche = new Car();
        $coche->model = $request->input("model");
        $coche->make = $request->input("make");
        $coche->image = $request->input("imagen");
        $coche->save();
        return redirect("../cars");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      $car = Car::find($id);
      return view('cars.show', array('car' => $car));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $car = Car::findOrFail($id);
        return view('cars.edit', array('car' => $car));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $car = Car::findOrFail($id);
        $car->model = $request->input('model');
        $car->make = $request->input('make');
        $car->image = $request->input('imagen');
        $car->save();
        return redirect("/cars");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $client = Car::findOrFail($id);
        $client->delete();
        return redirect('/cars');
    }


}
