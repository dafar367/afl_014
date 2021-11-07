<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $service = service::all();
        return view('serviceTable', [
            'title' => 'service table',
            'services' => $service
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
        return view('serviceCreate',[
            'title' => 'service create'
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

        service::create([
            'service_name' => $request->service_name,
            'service_code' => $request->service_code,
            'service_description' => $request->service_description 
        ]);
         
        return redirect(route('serviceTable.index'));
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
        $service = service::where('service_code', $id)->get()->first();
        return view('serviceShow',[
            'title' => 'service show',
            'services' => $service
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
        $service = service::findOrFail($id);
        return view('editService',[
            'title' => 'service edit',
            'service' => $service
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
        $service = service::findOrFail($id);
        $service->update([
            'service_name' => $request->service_name,
            'service_code' => $request->service_code,
            'service_description' => $request->service_description 
        ]);
        return redirect(route('serviceTable.index'));
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
        $service = service::findOrFail($id);
        $service->delete();
        return redirect(route('serviceTable.index'));

    }
}
