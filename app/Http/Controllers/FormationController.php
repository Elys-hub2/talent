<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormationRequest;
use App\Http\Requests\UpdateFormationRequest;
use App\Models\Formation;

class FormationController extends Controller
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
     * @param  \App\Http\Requests\StoreFormationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormationRequest $request)
    {
        $this->validate($request, [
            'nom' => 'bail|required|nom',
            'prénom' => 'bail|required|prénom',
            'sexe' => 'bail|required|sexe',
            'age' => 'bail|required|age',
            'lieu_formation' => 'bail|required|lieu_formation',
            'date_debut' => 'bail|required|date_debut',
            'date_fin' => 'bail|required|date_fin',
            'h_présence' => 'bail|required|h_présence',
            'heures' => 'bail|required|heures',
            'cours' => 'bail|required|cours',
            'prix' => 'bail|required|prix',
            ]);
        dd(\App\Models\Formation::create ($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormationRequest  $request
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormationRequest $request, Formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        //
    }
}
