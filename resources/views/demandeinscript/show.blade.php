@extends('components.appsta-layout')

@section('content')
<div class="max-w-4xl mx-auto mt-8">
    <div class="mb-4">
        <h1 class="text-3xl font-bold">Afficher l'inscription</h1>
    </div>
    <div class="flex justify-end mt-5">
        <a class="px-2 py-1 round-md bg-sky-500 text-sky-100 hover:bg-sky-600" href="{{ route('demandeinscription.index') }}">Back</a>
    </div>
</div>
<div class="flex flex-col mt-5">
    
     @foreach($demandeinscription as $demandeinscript)
    <div class="w-full px-6 py-4 bg-white shadow rounded-md ring-1 ring-gray-900/10">
        <h3 class="text-2xl font-semibold">{{ $demandeinscript->nom }}</h3>
        <h3 class="text-2xl font-semibold">{{ $demandeinscript->prénom }}</h3>
        <h3 class="text-2xl font-semibold">{{ $demandeinscript->poste }}</h3>
        <h3 class="text-2xl font-semibold">{{ $demandeinscript->dipôme }}</h3>
        <h3 class="text-2xl font-semibold">{{ $demandeinscript->sujet }}</h3>
        <h3 class="text-2xl font-semibold">{{ $demandeinscript->email }}</h3>
        <h3 class="text-2xl font-semibold">{{ $demandeinscript->telephone }}</h3>
        <p class="text-base text-gray-700 mt-5">{{ $demandeinscript->contenu }}</p>
    </div>
     @endforeach
   
</div>
@endsection