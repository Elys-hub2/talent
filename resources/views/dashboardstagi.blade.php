@extends('components.appsta-layout')

@section('content')
 
<div class="bg-blend-soft-light">
    <div class="md:grid md:grid-flow-col md:gap-8">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-semibold leading-6 text-slate-600">Information</h3>
            </div>
        </div>
        <div class="flex space-x-6">
            <a class="md:animate-ping hover:bg-cyan-600 icon-back shadow-lg shadow-indigo-400" href="{{ route('demandeinscription.index')}}"> Back</a>
        </div>
        <div class="flex justify-end mt-10">
            <a href="{{ route('demandeinscription.create') }}" class="px-2 py-1 rounded-md bg-blue-500 text-sky-300 hover:bg-blue-50"> Créer une inscription</a>
        </div>
        <div class="flex flex-col mt-10">
            <div class="flex flex-col">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-md">
                @if ($message = Session::get('success'))
           <div class="p-3 rounded bg-green-500 text-green-100 mb-4 m-3">
            <span>{{ $message }}</span>
           </div>
        @endif
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-100">id</th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-100">nom</th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-100">prénom</th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-100">poste</th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-100">diplôme</th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-100">sujet</th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-100">email</th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-100">téléphone</th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-100">contenu</th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-100 w-48">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
              @if(count($demandeinscription) > 0)
                @foreach ($demandeinscription as $demandeinscript)
                  <tr>
                    <td class="px-6 whitespace-nowrap border-b border-gray-200">{{ $demandeinscript->id_demande }}</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $demandeinscript->nom }}</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $demandeinscript->prénom }}</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $demandeinscript->poste }}</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $demandeinscript->diplôme }}</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $demandeinscript->sujet }}</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $demandeinscript->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $demandeinscript->telephone }}</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $demandeinscript->contenu }}</td>
                    <td>
                        <form class="flex flex-col" action="{{ route('demandeinscription.destroy', $demandeinscript->id_demande) }}" method="post">
                            <a class="text-indigo-600 hover:text-lime-500" href="{{ route('demandeinscription.edit', $demandeinscript->id_demande) }}">Editer</a>
                            <a class="text-indigo-600 hover:text-lime-300" href="{{ route('demandeinscription.show', $demandeinscript->id_demande) }}">montrer</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                  </tr>  
                @endforeach
              @endif    
            </tbody>
        </table>
        {!! $demandeinscription->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection