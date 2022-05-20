<?php

namespace App\Http\Controllers;

use App\Models\PlagiarismResult;
use App\Http\Requests\StorePlagiarismResultRequest;
use App\Http\Requests\UpdatePlagiarismResultRequest;

class PlagiarismResultController extends Controller
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
     * @param  \App\Http\Requests\StorePlagiarismResultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlagiarismResultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlagiarismResult  $plagiarismResult
     * @return \Illuminate\Http\Response
     */
    public function show(PlagiarismResult $plagiarismResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlagiarismResult  $plagiarismResult
     * @return \Illuminate\Http\Response
     */
    public function edit(PlagiarismResult $plagiarismResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlagiarismResultRequest  $request
     * @param  \App\Models\PlagiarismResult  $plagiarismResult
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlagiarismResultRequest $request, PlagiarismResult $plagiarismResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlagiarismResult  $plagiarismResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlagiarismResult $plagiarismResult)
    {
        //
    }
}
