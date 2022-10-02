<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CarBodyType;
use Illuminate\Http\Request;

class CarBodyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carsBodyModels = CarBodyType::all();

        return response()->json([
            'status' => true,
            'data' => $carsBodyModels
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarBodyType  $carBodyType
     * @return \Illuminate\Http\Response
     */
    public function show(CarBodyType $carBodyType)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarBodyType  $carBodyType
     * @return \Illuminate\Http\Response
     */
    public function edit(CarBodyType $carBodyType)
    {
    //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarBodyType  $carBodyType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarBodyType $carBodyType)
    {
    //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarBodyType  $carBodyType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarBodyType $carBodyType)
    {
    //
    }
}
