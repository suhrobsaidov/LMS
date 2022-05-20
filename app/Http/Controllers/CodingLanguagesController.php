<?php

namespace App\Http\Controllers;

use App\Models\CodingLanguages;
use App\Http\Requests\StoreCodingLanguagesRequest;
use App\Http\Requests\UpdateCodingLanguagesRequest;

class CodingLanguagesController extends Controller
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
     * @param  \App\Http\Requests\StoreCodingLanguagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCodingLanguagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CodingLanguages  $codingLanguages
     * @return \Illuminate\Http\Response
     */
    public function show(CodingLanguages $codingLanguages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CodingLanguages  $codingLanguages
     * @return \Illuminate\Http\Response
     */
    public function edit(CodingLanguages $codingLanguages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCodingLanguagesRequest  $request
     * @param  \App\Models\CodingLanguages  $codingLanguages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCodingLanguagesRequest $request, CodingLanguages $codingLanguages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CodingLanguages  $codingLanguages
     * @return \Illuminate\Http\Response
     */
    public function destroy(CodingLanguages $codingLanguages)
    {
        //
    }
}
