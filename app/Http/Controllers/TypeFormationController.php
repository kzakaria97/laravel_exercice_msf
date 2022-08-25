<?php

namespace App\Http\Controllers;

use App\Models\TypeFormation;
use App\Http\Requests\StoreTypeFormationRequest;
use App\Http\Requests\UpdateTypeFormationRequest;

class TypeFormationController extends Controller
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
     * @param  \App\Http\Requests\StoreTypeFormationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeFormationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeFormation  $typeFormation
     * @return \Illuminate\Http\Response
     */
    public function show(TypeFormation $typeFormation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeFormation  $typeFormation
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeFormation $typeFormation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeFormationRequest  $request
     * @param  \App\Models\TypeFormation  $typeFormation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeFormationRequest $request, TypeFormation $typeFormation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeFormation  $typeFormation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeFormation $typeFormation)
    {
        //
    }
}
