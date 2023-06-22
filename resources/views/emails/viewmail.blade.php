<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./dist/output.css" rel="stylesheet">
    <title>🤭  Contenu du message</title>

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])

     <!-- Styles -->
     @livewireStyles
</head>
<body>
    <div class=" grid-flow-col font-medium text-center text-sm text-gray-800">
        <div> Nom : {{ $orderNom }}</div>
        <div> Email : {{ $orderEmail }}</div>
        <div> Message : {{ $orderMessage }}</div>
    </div>
    
</body>
</html>