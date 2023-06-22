<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStageRequest;
use App\Http\Requests\UpdateStageRequest;
use App\Models\Stage;

class StageController extends Controller
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
     * @param  \App\Http\Requests\StoreStageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStageRequest $request)
    {
        $this->validate($request, [
            'nom' => 'bail|required|nom',
            'prénom' => 'bail|required|prénom',
            'sexe' => 'bail|required|sexe',
            'age'=> 'bail|required|age',
            'session'=> 'bail|required|session',
            'h_présence'=> 'bail|required|h_présence',
            'heures'=> 'bail|required|heures',
            'date_debut'=> 'bail|required|date_debut',
            'date_fin'=> 'bail|required|date_fin',
            ]);
        dd(\App\Models\Stage::create ($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function show(Stage $stage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function edit(Stage $stage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStageRequest  $request
     * @param  \App\Models\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStageRequest $request, Stage $stage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stage $stage)
    {
        //
    }
}
