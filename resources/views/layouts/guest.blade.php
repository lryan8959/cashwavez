<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
            .bg{
                background-image: url('{{ asset('bg-6.jpg') }}') !important;
                background-position:center center;
                background-size:cover;
                background-repeat:no-repeat;
                position:relative !important;
                padding:20px;
                text-align:center;
            }
            .bg h1{
            
            }
            .border{

                border:1px solid black !important;
            }
            .bg::before{
                content: "Welcome to Cashwavez";
                position: absolute;
                font-size: 2rem;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                width:100%;
                left: 0%;
                top:0%;
                height: 100%;
                background-color: #00000060 !important;
            
            }
        </style>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased" style="    background-image: url('{{ asset('bg-5.jpg') }}');
    ">
        <div class="min-h-screen flex flex-col sm:justify-center items-center  sm:pt-0 sm:mt-0 ">
            <div class="bg w-full sm:max-w-md  px-6 py-4  overflow-hidden sm:rounded-lg border " >
                
                <div style="padding: 40px 20px;">
                    <h2 style="d-none font-size: 2rem;color:white;">.</h2>
                    
                </div>
            </div>

            <div class="w-full sm:max-w-md  px-6 py-4  overflow-hidden ">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
