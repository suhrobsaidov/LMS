<?php

namespace App\Http\Controllers;

use App\Models\UserCources;
use App\Http\Requests\StoreUserCourcesRequest;
use App\Http\Requests\UpdateUserCourcesRequest;

class UserCourcesController extends Controller
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
     * @param  \App\Http\Requests\StoreUserCourcesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCourcesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCources  $userCources
     * @return \Illuminate\Http\Response
     */
    public function show(UserCources $userCources)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCources  $userCources
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCources $userCources)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCourcesRequest  $request
     * @param  \App\Models\UserCources  $userCources
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCourcesRequest $request, UserCources $userCources)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCources  $userCources
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCources $userCources)
    {
        //
    }
}
