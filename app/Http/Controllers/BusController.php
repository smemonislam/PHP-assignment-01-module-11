<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusRequest;
use App\Http\Requests\UpdateBusRequest;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.buses.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.buses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBusRequest $request)
    {
        BUS::create($request->validated());

        return redirect()->back()->with('success', 'Buses created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bus $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusRequest $request, Bus $bus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bus $bus)
    {
        //
    }
}
