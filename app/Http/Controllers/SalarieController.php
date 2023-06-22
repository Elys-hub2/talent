<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSalarieRequest;
use App\Http\Requests\UpdateSalarieRequest;
use App\Models\Salarie;

class SalarieController extends Controller
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
     * @param  \App\Http\Requests\StoreSalarieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalarieRequest $request)
    {
        $this->validate($request, [
            'nom' => 'bail|required|nom',
            'prénom' => 'bail|required|prénom',
            'sexe' => 'bail|required|sexe',
            'entité' => 'bail|required|entité',
            'email' => 'bail|required|email',
            'poste_actuel' => 'bail|required|poste_actuel',
            'poste_occupe' => 'bail|required|poste_occupe',
            'capacité' => 'bail|required|capacité',
            'performance' => 'bail|required|performance',
            ]);
        dd(\App\Models\Salarie::create ($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function show(Salarie $salarie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function edit(Salarie $salarie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalarieRequest  $request
     * @param  \App\Models\Salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalarieRequest $request, Salarie $salarie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salarie $salarie)
    {
        //
    }
}
