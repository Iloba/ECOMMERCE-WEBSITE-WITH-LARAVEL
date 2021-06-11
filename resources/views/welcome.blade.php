<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
       
        @include('layouts.header')
            <div class="section m-3">
                
            </div>
        @include('layouts.footer')
       

       
      
        
    </body>
</html>
