<?php

namespace App\Http\Controllers;

use App\Models\Demandeinscription;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateDemandeinscriptionRequest;
use App\Http\Requests\StoreDemandeinscriptionRequest;

use function Termwind\render;

class DemandeinscriptionController extends Controller
{

    public function __invoke()
    {
        //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandeinscription = Demandeinscription::latest()->paginate(5);
        

        return view('dashboardstagi', compact('demandeinscription'))->with('i', (request()->input('page', 1)-1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demandeinscript.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDemandeinscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDemandeinscriptionRequest $request)
    {
        $request->validated();
        Demandeinscription::create($request->post());
        return redirect()->route('dashboardstagi')->with('réussi', 'l\'inscription s\'est bien déroulé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demandeinscription  $demandeinscription
     * @return \Illuminate\Http\Response
     */
    public function show(Demandeinscription $demandeinscription)
    {
        $demandeinscription = Demandeinscription::find($demandeinscription);
        return view('demandeinscript.show', compact('demandeinscription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demandeinscription  $demandeinscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Demandeinscription $demandeinscription)
    {
        $demandeinscription = Demandeinscription::find($demandeinscription);
        return view('demandeinscript.edit', compact('demandeinscription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDemandeinscriptionRequest  $request
     * @param  \App\Models\Demandeinscription  $demandeinscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDemandeinscriptionRequest $request, Demandeinscription $demandeinscription)
    {
        $demandeinscription = Demandeinscription::find($demandeinscription);
         $request->validated();
    
        $demandeinscription->fill($request->post())->save();
        $demandeinscription->update();

        return redirect('/demandeinscription')->with('réussi', 'l\'inscription a été mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demandeinscription  $demandeinscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demandeinscription $demandeinscription)
    {
        $demandeinscription = Demandeinscription::destroy($demandeinscription);
       
        return redirect()->route('demandeinscription.index')->with('réussi', 'l\'inscription a été suprimmé avec succès');
    }
}
