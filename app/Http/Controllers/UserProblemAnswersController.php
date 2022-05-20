<?php

namespace App\Http\Controllers;

use App\Models\UserProblemAnswers;
use App\Http\Requests\StoreUserProblemAnswersRequest;
use App\Http\Requests\UpdateUserProblemAnswersRequest;

class UserProblemAnswersController extends Controller
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
     * @param  \App\Http\Requests\StoreUserProblemAnswersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserProblemAnswersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProblemAnswers  $userProblemAnswers
     * @return \Illuminate\Http\Response
     */
    public function show(UserProblemAnswers $userProblemAnswers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProblemAnswers  $userProblemAnswers
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProblemAnswers $userProblemAnswers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserProblemAnswersRequest  $request
     * @param  \App\Models\UserProblemAnswers  $userProblemAnswers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserProblemAnswersRequest $request, UserProblemAnswers $userProblemAnswers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProblemAnswers  $userProblemAnswers
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProblemAnswers $userProblemAnswers)
    {
        //
    }
}
