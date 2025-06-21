<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-7xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            <div class="flex items-center justify-between w-full">
            <!-- Logo and text content on left -->
            <div class="flex items-center">
                <!-- Logo placeholder -->
                <div>
                <img src="{{ asset('images/logo/BoCor.png') }}" alt="Bureau of Corrections Logo" class="h-16 w-auto">
                </div>
                
                <!-- Text content -->
                <div class="flex flex-col ml-3">
                <span class="text-sm dark:text-[#EDEDEC]">Republic of the Philippines</span>
                <div class="h-px bg-gray-800 dark:bg-gray-400 w-full my-1"></div>
                <h1 class="font-bold text-xl dark:text-[#EDEDEC]">Bureau of Corrections</h1>
                <span class="text-sm italic dark:text-[#EDEDEC]">"Bagong BuCor, Bagong Pilipinas"</span>
                </div>
            </div>

            <!-- Navigation buttons on right -->
            @if (Route::has('login'))
                <nav class="flex items-center gap-4">
                <a href="{{ url('/') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                    Home
                </a>
                <a href="{{ url('/about') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                    About
                </a>
                <a href="{{ url('/contacts') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                    Contacts
                </a>
                
                @auth
                    <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                    Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                    Log in
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Register
                    </a>
                    @endif
                @endauth
                </nav>
            @endif
            </div>
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-auto w-full flex-col-reverse lg:max-w-7xl lg:flex-row">
                <!-- Image Gallery Container -->
                <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-4">
                    <!-- Left: Full height image -->
                    <div class="lg:col-span-2 bg-gray-100 dark:bg-gray-800 rounded-lg overflow-hidden h-[400px] lg:h-[400px]">
                        <!-- Replace 'main-image.jpg' with your actual image filename -->
                        <img src="{{ asset('images/home/Panata.png') }}" alt="Main Image" 
                             class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Right: Two stacked images -->
                    <div class="lg:col-span-1 flex flex-col gap-4">
                        <!-- Top image -->
                        <div class="bg-gray-100 dark:bg-gray-800 rounded-lg overflow-hidden h-[190px] lg:h-[192px]">
                            <!-- Replace 'image-1.jpg' with your actual image filename -->
                            <img src="{{ asset('images/home/hiring.png') }}" alt="Image 1" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Bottom image -->
                        <div class="bg-gray-100 dark:bg-gray-800 rounded-lg overflow-hidden h-[190px] lg:h-[192px]">
                            <!-- Replace 'image-2.jpg' with your actual image filename -->
                            <img src="{{ asset('images/home/BoC.png') }}" alt="Image 2" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
