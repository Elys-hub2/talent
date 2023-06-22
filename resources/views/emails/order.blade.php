<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./dist/output.css" rel="stylesheet">
    <title>💆‍♂️ message</title>

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])

     <!-- Styles -->
     @livewireStyles

    <style>
      textarea { resize: both;}
    </style>
  </head>
  <body>
    <h2>Prise de contact sur mon beau site</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <div class="container">
      <div class="grid grid-flow-row auto-row text-red-100">
        <h1 class="card-header">Contactez-moi</h1>
        <div class="mt-5 md:mt-0 md:col-span-2">
          <form action="{{route('order.create')}}" method="POST">
            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                 <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                 <input type="text" name="nom" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                 @error('nom')
                 <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
                </div>
                <div class="col-span-6 sm:col-span-4">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('email')
                 <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-span-6 sm:col-span-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea name="message" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{old('message')}}</textarea>
                  @error('message')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
               <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Envoyer</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>