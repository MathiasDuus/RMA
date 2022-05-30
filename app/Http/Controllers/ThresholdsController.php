<?php

namespace App\Http\Controllers;

use App\Http\Resources\ThresholdResource;
use App\Models\Thresholds;
use Illuminate\Http\Request;

class ThresholdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ThresholdResource::collection(Thresholds::all());
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
        $threshold = Thresholds::create([
            'temperature' => $request->input('temperature'),
            'humidity' => $request->input('humidity'),
            'light' => $request->input('light'),
            'locationID' => $request->input('locationID'),
        ]);
        return new ThresholdResource($threshold);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thresholds  $thresholds
     * @return \Illuminate\Http\Response
     */
    public function show(Thresholds $thresholds)
    {
        return new ThresholdResource($thresholds);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thresholds  $thresholds
     * @return \Illuminate\Http\Response
     */
    public function edit(Thresholds $thresholds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thresholds  $thresholds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thresholds $thresholds)
    {
        $thresholds->update([
            'temperature' => $request->input('temperature'),
            'humidity' => $request->input('humidity'),
            'light' => $request->input('light'),
            'locationID' => $request->input('locationID'),
        ]);

        return new ThresholdResource($thresholds);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thresholds  $thresholds
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thresholds $thresholds)
    {
        /*
        $publisher->delete();
        return response(null, 204);
        */
        return response('Deletion is not allowed', 405);
    }
}
