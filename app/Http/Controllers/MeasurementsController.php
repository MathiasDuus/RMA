<?php

namespace App\Http\Controllers;

use App\Http\Resources\MeasurementResource;
use App\Models\Measurements;
use Illuminate\Http\Request;

class MeasurementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MeasurementResource::collection(Measurements::all()->sortByDesc('created_at'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $measurement = Measurements::create([
            'temperature' => $request->input('temperature'),
            'humidity' => $request->input('humidity'),
            'light' => $request->input('light'),
            'locationID' => $request->input('locationID'),
        ]);
        return new MeasurementResource($measurement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Measurements  $measurements
     * @return \Illuminate\Http\Response
     */
    public function show(Measurements $measurements)
    {
        return new MeasurementResource($measurements);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Measurements  $measurements
     * @return \Illuminate\Http\Response
     */
    public function edit(Measurements $measurements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Measurements  $measurements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Measurements $measurements)
    {
        $measurements->update([
            'temperature' => $request->input('temperature'),
            'humidity' => $request->input('humidity'),
            'light' => $request->input('light'),
            'locationID' => $request->input('locationID'),
        ]);

        return new MeasurementResource($measurements);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Measurements  $measurements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Measurements $measurements)
    {
        /*
        $publisher->delete();
        return response(null, 204);
        */
        return response('Deletion is not allowed', 405);
    }
}
