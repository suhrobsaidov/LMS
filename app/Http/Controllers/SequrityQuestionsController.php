<?php

namespace App\Http\Controllers;

use App\Models\SequrityQuestions;
use App\Http\Requests\StoreSequrityQuestionsRequest;
use App\Http\Requests\UpdateSequrityQuestionsRequest;

class SequrityQuestionsController extends Controller
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
     * @param  \App\Http\Requests\StoreSequrityQuestionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSequrityQuestionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SequrityQuestions  $sequrityQuestions
     * @return \Illuminate\Http\Response
     */
    public function show(SequrityQuestions $sequrityQuestions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SequrityQuestions  $sequrityQuestions
     * @return \Illuminate\Http\Response
     */
    public function edit(SequrityQuestions $sequrityQuestions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSequrityQuestionsRequest  $request
     * @param  \App\Models\SequrityQuestions  $sequrityQuestions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSequrityQuestionsRequest $request, SequrityQuestions $sequrityQuestions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SequrityQuestions  $sequrityQuestions
     * @return \Illuminate\Http\Response
     */
    public function destroy(SequrityQuestions $sequrityQuestions)
    {
        //
    }
}
