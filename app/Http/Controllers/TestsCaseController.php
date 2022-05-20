<?php

namespace App\Http\Controllers;

use App\Models\TestsCase;
use App\Http\Requests\StoreTestsCaseRequest;
use App\Http\Requests\UpdateTestsCaseRequest;

class TestsCaseController extends Controller
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
     * @param  \App\Http\Requests\StoreTestsCaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestsCaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestsCase  $testsCase
     * @return \Illuminate\Http\Response
     */
    public function show(TestsCase $testsCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestsCase  $testsCase
     * @return \Illuminate\Http\Response
     */
    public function edit(TestsCase $testsCase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestsCaseRequest  $request
     * @param  \App\Models\TestsCase  $testsCase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestsCaseRequest $request, TestsCase $testsCase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestsCase  $testsCase
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestsCase $testsCase)
    {
        //
    }
}
