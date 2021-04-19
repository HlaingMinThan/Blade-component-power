<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blade Component Learning</title>
        <link 
            href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" 
            rel="stylesheet"
        >
    </head>
    <body class="p-10">
        
        <h1 class="text-3xl text-blue-500 text-center">
            Blade Component Learning
        </h1>
        
        {{$slot}}
    
    </body>
</html>