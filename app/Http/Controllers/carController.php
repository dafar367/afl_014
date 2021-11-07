<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

use App\Models\service;

class carController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $car = car::all();
        return view('carTable', [
            'title' => 'car table',
            'cars' => $car
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $service = service::all();
        return view('carCreate',[
            'title' => 'car create',
            'services' => $service
        ]);

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
        car::create([
            'car_name' => $request->car_name,
            'car_owner' => $request->car_owner,
            'car_service' => $request->car_service,
            'car_plate' => $request->car_plate,
            'car_description' => $request->car_description
        ]);

        return redirect(route('carTable.index'));
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

        return view('carShow',[
            'title' => 'car show',
            'cars' => car::where('id', $id)->get()->first()
        ]);
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
        $service = service::all();
        $car = car::findOrFail($id);
        return view('editCar',[
            'title' => 'car edit',
            'car' => $car,
            'services' => $service
        ]);
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
        $car = car::findOrFail($id);
        $car->update([
            'car_name' => $request->car_name,
            'car_owner' => $request->car_owner,
            'car_service' => $request->car_service,
            'car_plate' => $request->car_plate,
            'car_description' => $request->car_description
        ]);
        return redirect(route('carTable.index'));

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
        $car = car::findOrFail($id);
        $car->delete();
        return redirect(route('carTable.index'));

    }
}
