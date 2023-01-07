<?php

namespace App\Http\Controllers;

use App\Models\UserController;
use App\Http\Requests\StoreUserControllerRequest;
use App\Http\Requests\UpdateUserControllerRequest;

class UserControllerController extends Controller
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
     * @param  \App\Http\Requests\StoreUserControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function show(UserController $userController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function edit(UserController $userController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserControllerRequest  $request
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserControllerRequest $request, UserController $userController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserController $userController)
    {
        //
    }
}
