<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('style.css') }}" rel="stylesheet">


        <title>Laravel</title>

        <link href="style.css" rel="stylesheet">

    </head>
    <body> 
      
        <header>
            <img src="\public\images\logo.png" alt="logo" /> 

             <nav> <a href="/"> Home</a> | <a href="/about">  About</a> |<a href="/contact">  Contact us</a> </nav>
         
            </header>
            
            @yield('content')
            <footer>Matan Ben Zahav 2023</footer>
            
            
        </body>
        </html>
