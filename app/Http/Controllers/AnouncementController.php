<?php

namespace App\Http\Controllers;

use App\Models\Anouncement;
use App\Http\Requests\StoreAnouncementRequest;
use App\Http\Requests\UpdateAnouncementRequest;

class AnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreAnouncementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnouncementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anouncement  $anouncement
     * @return \Illuminate\Http\Response
     */
    public function show(Anouncement $anouncement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anouncement  $anouncement
     * @return \Illuminate\Http\Response
     */
    public function edit(Anouncement $anouncement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnouncementRequest  $request
     * @param  \App\Models\Anouncement  $anouncement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnouncementRequest $request, Anouncement $anouncement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anouncement  $anouncement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anouncement $anouncement)
    {
        //
    }
}
