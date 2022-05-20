<?php

namespace App\Http\Controllers;

use App\Models\UserQuiz;
use App\Http\Requests\StoreUserQuizRequest;
use App\Http\Requests\UpdateUserQuizRequest;

class UserQuizController extends Controller
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
     * @param  \App\Http\Requests\StoreUserQuizRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserQuizRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserQuiz  $userQuiz
     * @return \Illuminate\Http\Response
     */
    public function show(UserQuiz $userQuiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserQuiz  $userQuiz
     * @return \Illuminate\Http\Response
     */
    public function edit(UserQuiz $userQuiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserQuizRequest  $request
     * @param  \App\Models\UserQuiz  $userQuiz
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserQuizRequest $request, UserQuiz $userQuiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserQuiz  $userQuiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserQuiz $userQuiz)
    {
        //
    }
}
