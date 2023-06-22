@extends('components.appsta-layout')

@section('content')

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="flex space-x-6">
            <a class="md:animate-ping hover:bg-cyan-600 icon-back shadow-lg shadow-indigo-400" href="{{ route('demandeinscription.index')}}"> Back</a>
    </div>
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">💁 Information personnelle</h3>
        <p class="mt-1 text-sm text-gray-600">S'il vous plait veuillez utiliser une addresse permanente.</p>
      </div>
    </div>
    @if ($errors->any())
    <div class="p-3 rounded bg-red-500 text-white m-3">
      <strong>OUPS!</strong><p>Il y a un problème avec votre saisie </p>
      <ul>
        @foreach ( $errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{ route('demandeinscription.store') }}" method="POST">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="w-full px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Prenom</label>
                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="poste" class="block text-sm font-medium text-gray-700">Poste</label>
                <input type="text" name="poste" id="poste" autocomplete="poste" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="diplome" class="block text-sm font-medium text-gray-700">Diplome</label>
                <input type="text" name="diplome" id="diplome" autocomplete="diplome" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="telephone" class="block text-sm font-medium text-gray-700">Telephone</label>
                <input type="tel" name="telephone" id="telephone" autocomplete="telephone-fam" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Sujet</label>
                <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>formation</option>
                  <option>stage</option>
                </select>
              </div>

              <div>
              <label for="about" class="block text-sm font-medium text-gray-700"> Motication </label>
              <div class="mt-1">
                <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
              </div>
              <p class="mt-2 text-sm text-gray-500">Brief description de ton profil et ta motivation en ajoutant ce que tu veux faire.</p>
            </div>

            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection