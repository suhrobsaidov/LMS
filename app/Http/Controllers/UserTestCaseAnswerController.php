<?php

namespace App\Http\Controllers;

use App\Models\UserTestCaseAnswer;
use App\Http\Requests\StoreUserTestCaseAnswerRequest;
use App\Http\Requests\UpdateUserTestCaseAnswerRequest;

class UserTestCaseAnswerController extends Controller
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
     * @param  \App\Http\Requests\StoreUserTestCaseAnswerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserTestCaseAnswerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserTestCaseAnswer  $userTestCaseAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(UserTestCaseAnswer $userTestCaseAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserTestCaseAnswer  $userTestCaseAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(UserTestCaseAnswer $userTestCaseAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserTestCaseAnswerRequest  $request
     * @param  \App\Models\UserTestCaseAnswer  $userTestCaseAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserTestCaseAnswerRequest $request, UserTestCaseAnswer $userTestCaseAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserTestCaseAnswer  $userTestCaseAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTestCaseAnswer $userTestCaseAnswer)
    {
        //
    }
}
